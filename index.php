<?php
require 'vendor/autoload.php';
require 'app/routes.php';

$router = new App\Router();

$router->define($routes);
$router->watch();