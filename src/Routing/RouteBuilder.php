<?php

namespace SquallPHP\Routing;

class RouteBuilder
{
    private $method = '';
    private $callbacks = [];
    
    public function __construct ($method = 'GET')
    {
        $this->method = $method;
    }

    public function middleware ($className)
    {
        $this->callbacks[] = function () use ($className)
        {
            
        };
    }

    public function __exec ()
    {
        
    }
}

?>