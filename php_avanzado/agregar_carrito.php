<?php
require_once('conection.php');
require_once('carrito.php');

$base = new BaseDatos();
$carrito = new Carrito($base);

$codigo = $_GET['codigo'];
$producto = $_GET['producto'];
$descripcion = $_GET['descripcion'];
$precio = $_GET['precio'];

$carrito->introducir_compra($codigo, $producto, $descripcion, $precio);
header('Location: unidad7.php')
?>