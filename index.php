<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
require './vendor/autoload.php';

$app = new \Slim\App;
/**
 * Inicio de tudo mlk xD
 * @var string
 */


$app->get('/', function (Request $request, Response $response) use ($app) {
    $response->getBody()->write("Opa, bombando");
    return $response;
});
$app->run();

?>
