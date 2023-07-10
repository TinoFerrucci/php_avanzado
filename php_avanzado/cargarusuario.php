<?php
include_once('conection.php');
include_once('user_class.php');
$db_conection = new BaseDatos();

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$user = new Usuario($email, $nombre, $password, $db_conection);
if ($user->create_user() == TRUE){
    header('Location: unidad8.php?register=TRUE');
} else{
    header('Location: unidad8.php?register=FALSE');
}
?>