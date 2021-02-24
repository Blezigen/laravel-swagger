<?php


namespace Tests;


use Illuminate\Contracts\Console\Kernel;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}