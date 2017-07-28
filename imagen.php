<?php

namespace Devcodela;

class Imagen
{
    public $url;
    public $ancho;
    public function mostrar()
    {
        return "<img src=\"" . $this->url . "\" width=\"" . $this->ancho ."\">"; // <img src="ejemplo.jpg">
    }

    public function __construct()
    {
        $this->url = "image_not_found.png";
    }

    public function setAncho($nuevoAncho)
    {
        try {
            if (!is_int($nuevoAncho)) {
                throw new \Exception("El ancho debe ser un numero entero", 1);
            } else if ($nuevoAncho == 0) {
                throw new \Exception("El ancho debe ser un numero distinto a cero", 1);
            } else if ($nuevoAncho < 0) {
                throw new \Exception("El ancho debe ser un numero mayor a cero", 1);
            } else {
                $this->ancho = $nuevoAncho;
            }   
        } catch (\Exception $e) {
            $file = fopen("/var/www/html/poo/log.txt", "a");
            fwrite($file , $e->getMessage() . PHP_EOL);
            fclose($file);
        }
    }

    public function getAncho() {
        return $this->ancho;
    }
}
