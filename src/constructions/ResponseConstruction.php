<?php


namespace Support\AutoDoc\constructions;


class ResponseConstruction extends AbstractBasicConstruction
{

    public function getAnnotationPrefix(): string
    {
        return "response";
    }

    public function context($context): void
    {

    }

}