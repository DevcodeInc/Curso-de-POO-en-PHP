<?php
/* Productos */
namespace MisClases;

require_once "ORM.php";
require_once "Producto.php";

class Productos extends ORM
{
	protected $db;
	const TABLENAME = 'Productos';
	public $listProduct = [];

	public function __construct()
	{
        parent::__construct();
        $this->Tabla = self::TABLENAME;
	}


	public function Todos()
	{
		$list = parent::Todos();		
		while ($row = mysqli_fetch_object($list)) {
				$miProducto = new Producto($row->id, $row->Nombre, $row->Descripcion,
					$row->Link, $row->Imagen, $row->Precio);
				$this->listProduct[] = $miProducto;
		}
	}

	public function __tostring() : STRING
	{
		$this->Todos();
		$out = "<table border = '1'> \n";
		$out = $out . "<tr><td>Id</td><td>Nombre</td><td>Descripcion</td><td>Link</td><td>Imagen</td><td>Precio</td></tr>";
		foreach ($this->listProduct as $product) {
			$out = $out . $product->showRow();
		}
		$out = $out . "</table>";
		return $out;
	}
}