<?php

namespace Devcodela;

class Imagen
{
    public $url;
    public function mostrar()
    {
        return "<img src=\"" . $this->url . "\">"; // <img src="ejemplo.jpg">
    }
    
    public function __construct()
    {
        $this->url = "image_not_found.png";
    }    
}
