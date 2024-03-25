<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';

function autoload($className)
{
    $paths=['/', '/controllers', '/views', '/models'];
    foreach($paths as $path)
    {
        $file = __DIR__.$path."/$className.php";
        if(file_exists($file))
        {
            require_once($file);
            break;
        }
    }
}
spl_autoload_register("autoload");
$app = AppFactory::create();

$app->get('/', 'HomeController:index');
$app->get('/alunni/search[/{nome}]', 'AlunniController:findByName');
$app->get('/alunni', 'AlunniController:index');
$app->run();
