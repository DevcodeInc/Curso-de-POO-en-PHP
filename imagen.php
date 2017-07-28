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

    public function __toString() {
        return $this->mostrar();
    }

    public function __set($name, $value) {
        echo "Cambiando valores '$name' to '$value'\n";
        $this->data($name) = $value;
    }

    public function __call($name, $arguments) {
        // $name[0 ..3] y se fija si = set
        // $name[4 ..ultimo] y busca ese valor en la db
        // lo cambia

        //Note: value of $name is case sensitive
        echo "Calling object method '$name'"
             . implode(', ', $arguments) . "\n";
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
