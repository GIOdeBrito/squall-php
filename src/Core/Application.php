<?php

/* =======================================
SquallPHP by Giordano de Brito
======================================= */

namespace SquallPHP\Core;

use SquallPHP\Core\Config;
use SquallPHP\Routing\Router;
use SquallPHP\Services\DIContainer;

class Application
{
    private $container;
    private $config;
    private $router;
    
    public function __construct ()
    {
        $this->container = new DIContainer();
        
        $this->config = new Config();
        $this->router = new Router($this->config);
    }

    public function config ()
    {
        return $this->config;
    }

    public function router ()
    {
        return $this->router;
    }

    public function run ()
    {
        $this->router->call();
    }
}

?>