<?php
namespace MisClases;

require_once "config.php";

class BaseDatos {
	protected $conexion;
	protected $db;

	public function getConexion()
	{
		return $this->conexion;
	}

	public function conectar()
	{
		$this->conexion = new \mysqli(HOST, USER, PASS, DBNAME);
		if (mysqli_connect_errno()) {
			die('Lo sentimos, no se ha podido conectar con Mysql:'.mysql_errno());
		}
		return true;
	}

	public function desconect()
	{
		if ($this->conexion) {
			mysqli_close($this->conexion);
		}
	}


	public function __destroy() {
		$this->desconect();
	}
}