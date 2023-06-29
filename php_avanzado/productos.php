<?php
class Productos {
    private $db;

    function __construct($base){
        $this->db = $base;
    }

    function listar_productos(){
        $respuesta = $this->db->select_query("SELECT * FROM productos");
        return $respuesta;
    }
}

?>