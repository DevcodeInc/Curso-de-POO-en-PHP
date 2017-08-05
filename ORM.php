<?php
namespace MisClases;

require_once "db.php";

abstract class ORM
{
	protected $db;
	protected $Tabla;
	protected $Dir;
	protected $list = array();

	public function __construct()
	{
		$this->db = new BaseDatos();
	}


	public function select($query)
	{
		return $this->db->getConexion()->query($query);
	}

	public function Todos()
	{
		$this->db->conectar();
		$list = $this->select("SELECT * FROM " . $this->Tabla);
		return $list;
	}
}