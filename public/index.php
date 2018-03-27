<?php
require __DIR__ . '/../vendor/autoload.php';
/**
 * Engistrement des services
 */
DI::addServices(__DIR__ . '/../config/services.php');
/**
 * Chargement des routes de l'aplication
 */
require __DIR__ . '/../routes/web.php';
/**
 * On initialise la réponse 
 */
$response = Route::dispatch(DI::get('request')->getMethod(), DI::get('request')->getUri()->getPath());
/**
 * On affiche la réponse
 */
DI::get('emitter')->emit($response);
