<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    /**
     * Metodo per l'accesso alla home page
     * @method GET
     */
    function index(Request $request, Response $response, $args) {
        $classe = new Classe();
        //$arrayy = $classe->getArray();
        
        $view = new MainPage();
        $view->setData($classe);

        $response->getBody()->write($view->render());
        return $response;
    }
}