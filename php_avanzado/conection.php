<?php
$db = mysqli_connect('localhost', 'root', '', 'phpavanzado');

class BaseDatos{
    private $conexion;
    private $error;

    function __construct(){
        if(!$this->_connect()){
            $this->error = $this->conexion->connect_error;
        }
    }

    function _connect(){
        $this->conexion = new mysqli('localhost', 'root', '', 'phpavanzado');
    }

    function select_query($query){
        $response = $this->conexion->query($query);
        $lista = array();
        while($fila=$response->fetch_assoc()){
            array_push($lista, $fila);
        }
        return $lista;
    }

    function select_one_query($query){
        $response = $this->conexion->query($query);
        return $response->fetch_assoc();
    }

    function delete_query($query){
        $response = $this->conexion->query($query);
    }

    function add_query($query){
        $this->conexion->query($query);
    }
}
?>