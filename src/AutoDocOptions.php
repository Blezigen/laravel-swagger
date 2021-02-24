<?php


namespace Support\AutoDoc;



use Spatie\DataTransferObject\DataTransferObject;

class AutoDocOptions extends DataTransferObject
{
    public static function fromArray($config)
    {
        return new AutoDocOptions($config);
    }
}