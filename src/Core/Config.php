<?php

namespace SquallPHP\Core;

class Config
{
    private $viewsDirectory;
    private $layoutDirectory = __DIR__."/../Template";
    
    public function __construct ()
    {

    }

    public function setViewsDirectory ($path)
    {
        $this->viewsDirectory = $path;
    }

    public function getViewsDirectory ()
    {
        return $this->viewsDirectory;
    }

    public function setLayoutDirectory ($path)
    {
        $this->layoutDirectory = $path;
    }

    public function getLayoutDirectory ()
    {
        return $this->layoutDirectory;
    }
}

?>