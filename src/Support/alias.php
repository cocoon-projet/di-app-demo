<?php
/**
 * Initialisation des facades
 */
$aliases = [
   'DI' => Cocoon\Dependency\DI::class,
   'Route' => Core\Facades\Router::class,
   'View' => Core\Facades\View::class
];
foreach ($aliases as $alias => $class) {
        class_alias($class, $alias);
}