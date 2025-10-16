<?php

namespace SquallPHP\Http;

class Request 
{
    public function __construct ()
    {

    }

    public function method ()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function URI ()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public function body ()
    {
        return json_decode(file_get_contents('php://input'));
    }

    public function form ()
    {
        return (object) $_POST;
    }

    public function query ()
    {
        return (object) $_GET;
    }
}

?>