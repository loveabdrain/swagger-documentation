<?php

declare(strict_types=1);

namespace VictoryGroup\Swagger\OpenApi;

use OpenApi\Attributes\Attachable;
use OpenApi\Attributes\JsonContent;
use OpenApi\Attributes\MediaType;
use OpenApi\Attributes\Property;
use OpenApi\Attributes\Response;
use OpenApi\Attributes\XmlContent;
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
final class ResponseOk extends Response
{
    public function __construct(
        object|string|null $ref = null,
        MediaType|JsonContent|XmlContent|Attachable|array|null $content = null,
        ?array $headers = null,
    ) {
        parent::__construct(
            ref: $ref,
            response: 200,
            description: 'Success',
            headers: $headers,
            content: $content,
        );
    }
}