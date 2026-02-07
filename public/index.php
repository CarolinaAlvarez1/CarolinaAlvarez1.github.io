<?php
require_once '../app/routers/Router.php';
$url = $_GET['url'] ?? '';
$router = new Router();
$router->dispatch($url);