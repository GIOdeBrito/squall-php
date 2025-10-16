<?php

namespace SquallPHP\Routing;

use SquallPHP\Http\Request;
use SquallPHP\Http\Response;

class Router
{
    private $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];
    
    private $request;
    private $response;
    
    public function __construct ($config)
    {
        $this->request = new Request();
        $this->response = new Response($config);
    }

    public function get ($route, $callable)
    {
        $this->routes['GET'][$route] = $callable;
    }

    public function post ($route, $callable)
    {
        $this->routes['POST'][$route] = $callable;
    }

    public function call ()
    {
        $req = $this->request;
        $res = $this->response;

        $method = $req->method();
        $uri = $req->URI();

        if(!array_key_exists($method, $this->routes))
        {
            http_response_code(500);
            echo "Method does not exist";
            die();
        }

        if(!isset($this->routes[$method][$uri]))
        {
            http_response_code(404);
            echo "Route not found";
            die();
        }

        $route = $this->routes[$method][$uri]($req, $res);
    }
}

?>