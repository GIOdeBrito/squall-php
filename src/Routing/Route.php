<?php

namespace SquallPHP\Routing;

class Route
{
    private $code;
    private $contentType;

    private $config;
    private $response;
    
    public function __construct ($config)
    {
        $this->config = $config;
    }

    public function status ($code = 200)
    {
        $this->code = intval($code);
        return $this;
    }

    public function json ($data)
    {
        $this->response = function () use ($data)
        {
            header('Content-Type: application/json');
            echo json_encode($data);
        };
    }

    public function render ($view, $layout = '_layout')
    {
        $config = $this->config;
        $this->response = function () use ($view, $layout, $config)
        {
            header('Content-Type: text/html');

            $viewsPath = $this->config->getViewsDirectory();
            $layoutPath = $this->config->getLayoutDirectory();

            ob_start();
            include $viewsPath.'/'.$view.'.php';
            $body = ob_get_clean();

            $final = include $layoutPath.'/'.$layout.'.php';

            //return $final;
        };
    }

    public function __exec ()
    {
        http_response_code($this->code);
        call_user_func($this->response);
    }
}

?>