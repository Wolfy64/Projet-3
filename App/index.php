<?php

require_once 'Controllers/Router.php';

$router = new Router();
$router->setRoute();
$router->loadController();