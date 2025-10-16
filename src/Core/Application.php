<?php

/* =======================================
SquallPHP by Giordano de Brito
======================================= */

namespace SquallPHP\Core;

use SquallPHP\Core\Config;
use SquallPHP\Routing\Router;

class Application
{
    private $config;
    private $router;
    
    public function __construct ()
    {
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