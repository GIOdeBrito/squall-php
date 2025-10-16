<?php

namespace SquallPHP\Http;

class Response 
{
    private $config;
    
    public function __construct ($config)
    {
        $this->config = $config;
    }

    public function status ($code = 200)
    {
        http_response_code(intval($code));
        return $this;
    }

    public function json ($data = [])
    {
        header('Content-Type: application/json');
        return json_encode($data);
    }

    public function html ($data = "")
    {
        header('Content-Type: text/html');
        return $data;
    }

    public function render ($view, $layout = '_layout')
    {
        header('Content-Type: text/html');

        $viewsPath = $this->config->getViewsDirectory();
        $layoutPath = $this->config->getLayoutDirectory();

        ob_start();
        include $viewsPath.'/'.$view.'.php';
        $body = ob_get_clean();

        $final = include $layoutPath.'/'.$layout.'.php';

        //return $final;
    }
}

?>