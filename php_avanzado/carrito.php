<?php
class Carrito {
    private $db;

    function __construct($base){
        $this->db = $base;
    }

    function listar_compra(){
        $respuesta = $this->db->select_query("SELECT * FROM compras");
        return $respuesta;
    }

    function introducir_compra($codigo, $producto, $descripcion, $precio){
        $this->db->add_query("INSERT INTO compras VALUES (default,$codigo,'$producto','$descripcion',$precio)");
    }

    function eliminar_compra($id){
        $this->db->delete_query("DELETE FROM compras WHERE id_compra=$id");
    }
}


?>