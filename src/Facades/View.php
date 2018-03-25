<?php

namespace Core\Facades;
/**
 * Façade View
 */
class View
{
    public static function __callStatic($name, $arguments)
    {
        $instance = \DI::get('view');
        return $instance->$name(...$arguments);
    }
}
