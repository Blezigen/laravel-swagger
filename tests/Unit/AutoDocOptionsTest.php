<?php


use Support\AutoDoc\AutoDocOptions;
use Tests\TestCase;

class AutoDocOptionsTest extends TestCase
{
    public function testMake()
    {
        $this->createApplication();

        $temp = AutoDocOptions::fromArray([]);

//        dd($temp);
    }
}
