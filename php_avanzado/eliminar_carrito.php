<?php
require_once('conection.php');
require_once('carrito.php');

$base = new BaseDatos();
$carrito = new Carrito($base);

$id = $_GET['id'];

$carrito->eliminar_compra($id);
header('Location: unidad7.php')
?>