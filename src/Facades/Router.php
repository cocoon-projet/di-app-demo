<?php

namespace Core\Facades;
/**
 * Façade Router
 */
class Router
{
    public static function __callStatic($name, $arguments)
    {
        $instance = \DI::get('router');
        return $instance->$name(...$arguments);
    }
}
