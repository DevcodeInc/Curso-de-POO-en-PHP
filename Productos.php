<?php

require_once "modelo.php";

class Productos {
    protected $db;
    const TABLENAME = 'Productos';


    public function __construct()
    {
        $this->db = new BaseDatos;
    }

    public function mostrar()
    {
        $this->db->conectar();
        $query = $this->db->getConexion()->query(
            "SELECT * FROM " . self::TABLENAME);
        if ($query === NULL) {
            echo "Sentencia incorrecta llamando a table: " . self::TABLENAME;
        } else {
            var_dump($query);
            while ($row = mysqli_fetch_object($query)) {
                var_dump($row);
            }
        }    
        mysqli_free_result($query);
    }
}
