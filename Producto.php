<?php

namespace MisClases;

//require_once "Image.php";

class Producto
{
	protected $id;
    protected $nombre;
    protected $descripcion;
    protected $link;
    protected $precio;
    protected $imagen;

    public function __construct($id, $nombre, $descripcion, $link, $imagen, $precio)
    {
    	$this->id = $id;
    	$this->nombre = $nombre;
    	$this->descripcion = $descripcion;
    	$this->link = $link;
    	$this->imagen = $imagen;
    	$this->precio = $precio;
    }

    public function showRow()
    {
    	//$img = new Image();
    	//$img->setFileName($this->image);
    	$out = sprintf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
    		$this->id,
    		$this->nombre,
    		$this->descripcion,
    		"<a href='".$this->link."'>".$this->link."</a>",
    		"<img src=\"".$this->imagen."\"></img>",
    		$this->precio);
    	return $out;
    }
}