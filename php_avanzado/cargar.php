<?php
// Inicializa una session e incluye el archivo que contiene la conexion a la db
session_start();
include('conection.php');

// Carga el captcha generado y el ingresado por el usuario
$captcha = $_SESSION['captcha'];
$captcha_usuario = $_POST['captcha_usuario'];

// Evalua que los captchas sean iguales y en caso de serlo carga la consulta en la db
if ($captcha == $captcha_usuario){
    $_SESSION['consulta'] = TRUE;
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $consulta = $_POST['consulta'];
    mysqli_query($db, "INSERT INTO consultas(nombre, apellido, email, consulta) VALUES ('$nombre', '$apellido', '$email', '$consulta');");
} else{
    $_SESSION['consulta'] = FALSE;
}

// Reubica nuevamente en unidad5.php
header('Location: unidad5.php')
?>