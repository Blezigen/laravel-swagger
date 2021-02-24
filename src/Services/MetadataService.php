<?php


namespace Support\AutoDoc\Services;


use Illuminate\Container\Container;
use Minime\Annotations\Cache\ArrayCache;
use Minime\Annotations\Parser;
use Minime\Annotations\Reader as AnnotationReader;

class MetadataService
{
    private Container $container;
    private AnnotationReader $annotationReader;


    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->annotationReader = new AnnotationReader(new Parser, new ArrayCache);;
    }

    public function getClassMetadata($class)
    {
        $annotations = $this->annotationReader->getClassAnnotations($class);
        return $annotations;
    }

    public function getMethodMetadata($class, $method)
    {
        $annotations = $this->annotationReader->getMethodAnnotations($class, $method);
    }
}