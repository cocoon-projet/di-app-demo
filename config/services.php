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
    // dns pour PDO
    'db.dns' => 'sqlite:' . __DIR__ . '/../database/database.sqlite',
    // Service PDO qui récupère le service db.dns
    \PDO::class => [
        '@constructor' => ['db.dns']
    ],
    // Service Database qui récupère le service PDO::class
    Database::class => [
        '@constructor' => [\PDO::class]
    ],
    // Service request psr-7 http message
    'request' => ServerRequestFactory::fromGlobals(),
    // service view (plates engine) ou l'on définit le répertoire de stockage des vues et l'extension des fichiers ex: index.plates.php 
    'view' => [
        '@class' => Engine::class,
        '@constructor' => [__DIR__ . '/../ressources/views', 'plates.php']
    ],
    // Service router 
    'router' => [
        '@class' => Routing::class,
        '@singleton' => true
    ],
    // Service emitter (pour les réponses)
    'emitter' => SapiEmitter::class
];
