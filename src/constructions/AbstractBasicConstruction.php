<?php


namespace Support\AutoDoc\constructions;


abstract class AbstractBasicConstruction
{
    public abstract function getAnnotationPrefix() : string;
    public abstract function context($context): void;
}