<?php

namespace Devcodela;

class Imagen
{
    public $url;
    public function mostrar()
    {
        return "<img src=\"" . $this->url . "\">"; // <img src="ejemplo.jpg">
    }
}
