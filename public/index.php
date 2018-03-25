<?php
require __DIR__ . '/../vendor/autoload.php';

DI::addServices(__DIR__ . '/../config/services.php');

require __DIR__ . '/../routes/web.php';

$response = Route::dispatch(DI::get('request')->getMethod(), DI::get('request')->getUri()->getPath());

DI::get('emitter')->emit($response);
