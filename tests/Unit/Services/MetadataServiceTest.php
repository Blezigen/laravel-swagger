<?php

namespace Services;

use Support\AutoDoc\Services\MetadataService;
use Tests\Partials\TestController;
use Tests\TestCase;

class MetadataServiceTest extends TestCase
{
    public function testInput()
    {
        $this->createApplication();
        /** @var MetadataService $service */
        $service = resolve(MetadataService::class);

        dd($service->getClassMetadata(TestController::class));
    }
}
