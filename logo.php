<?php

namespace Devcodela;

class Logo extends Imagen
{
    const ANCHO_DEFAULT = 50;

    public function mostrar()
    {
	return "<div class='logo'>img src=\"" . $this->url . "\"></div>";
    }

    public function __construct()
    {
	parent::__construct();
        $this->ancho = self::ANCHO_DEFAULT;
    }
}
