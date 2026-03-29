<?php

namespace Loveabdrain\SwaggerDocumentation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Loveabdrain\SwaggerDocumentation\Commands\SwaggerDocumentationCommand;

class SwaggerDocumentationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('loveabdrain-docs')
            ->hasConfigFile('loveabdrain-docs')
            ->hasCommand(SwaggerDocumentationCommand::class);
    }
}
