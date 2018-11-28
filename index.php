<?php


$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$router = Router::load('routes.php');

$router->direct($uri);