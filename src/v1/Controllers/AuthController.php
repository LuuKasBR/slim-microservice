<?php
namespace App\v1\Controllers;

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Firebase\JWT\JWT;

/**
 * Controller de Autenticação
 */
class AuthController {

    /**
     * Container
     * @var object s
     */
   protected $container;
   
   /**
    * Undocumented function
    * @param ContainerInterface $container
    */
   public function __construct($container) {
       $this->container = $container;
   }
   
   /**
    * Invokable Method
    * @param Request $request
    * @param Response $response
    * @param [type] $args
    * @return void
    */
   public function __invoke(Request $request, Response $response, $args) {

    /**
     * JWT Key
     */
    $key = $this->container->get("secretkey");

    $token = array(
        "user" => "@luukasbr",
        "reddit" => "https://www.reddit.com/user/LuuKas1",
        "github" => "https://github.com/luukasbr"
    );

    $jwt = JWT::encode($token, $key);

    return $response->withJson(["auth-jwt" => $jwt], 200)
        ->withHeader('Content-type', 'application/json');   
   }
}