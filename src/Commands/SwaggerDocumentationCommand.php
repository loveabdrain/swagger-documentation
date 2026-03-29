<?php

namespace Loveabdrain\SwaggerDocumentation\Commands;

use Exception;
use Illuminate\Console\Command;
use OpenApi\Analysers\ReflectionAnalyser;
use OpenApi\Generator;
use OpenApi\Util;

class SwaggerDocumentationCommand extends Command
{
    public $signature = 'loveabdrain:docs';

    public $description = 'Generate API documentation';

    /**
     * @throws Exception
     */
    public function handle(): int
    {
        $generator = new Generator();
        $analysers = array_map(function($analyser){
            return new $analyser[0](...($analyser[1] ?? []));
        }, config('Loveabdrain-documentation.analysers'));
        $analyser = new ReflectionAnalyser($analysers);

        $openapi = $generator
            ->setVersion(config('loveabdrain-docs.version'))
            ->setConfig([])
            ->setAnalyser($analyser)
            ->generate(config('loveabdrain-documentation.inputPaths'));

        $outputPath = config('loveabdrain-documentation.outputPath');
        $openapi->saveAs($outputPath);

        $this->output->success("Documentation generated successfully and written to $outputPath");

        return self::SUCCESS;
    }
}
