<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
include __DIR__ .'/controllers/HomeController.php';

$app = AppFactory::create();

$app->get('/alunni', 'HomeController:home');
$app->run();
