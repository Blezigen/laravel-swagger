<?php

namespace Support\AutoDoc\Traits;

/**
 * @deprecated
 */
trait AutoDocRequestTrait
{
    static public function getRules()
    {
        return (new static)->rules();
    }

}
