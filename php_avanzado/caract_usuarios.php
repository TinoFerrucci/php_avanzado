<?php
include('usuarios.php');

session_start();
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fecha_nacimiento = $_POST['fecha'];

$user = new Usuario($nombre, $apellido, $fecha_nacimiento);
$_SESSION['user'] = $user->imprime_caracteristicas();

header('Location: unidad6.php')
?>