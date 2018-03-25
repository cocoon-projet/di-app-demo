<?php 
use Core\Routing;
use Core\Database;
use League\Plates\Engine;
use Zend\Diactoros\ServerRequestFactory;
use Zend\Diactoros\Response\SapiEmitter;

/**
 * Enregistrement des services
 */
return [
    'db.dns' => 'sqlite:' . __DIR__ . '/../database/database.sqlite',
    \PDO::class => [
        '@constructor' => ['db.dns']
    ],
    Database::class => [
        '@constructor' => [\PDO::class]
    ],
    'request' => ServerRequestFactory::fromGlobals(),
    'view' => [
        '@class' => Engine::class,
        '@constructor' => [__DIR__ . '/../ressources/views', 'plates.php']
    ],
    'router' => [
        '@class' => Routing::class,
        '@singleton' => true
    ],
    'emitter' => SapiEmitter::class
];
