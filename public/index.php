<?php

/*
|--------------------------------------------------------------------------
| Boot the application.
|--------------------------------------------------------------------------
*/

require __DIR__ . '/../boot/application.php';

/*
|--------------------------------------------------------------------------
| Route the request.
|--------------------------------------------------------------------------
*/

$router = new Support\Router();
$response = new Support\Response;

$response->send($router->dispatch());