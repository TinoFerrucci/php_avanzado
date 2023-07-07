<?php
include_once('conection.php');

$email = $_POST['email'];
$nombre = $_POST['nombre'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

mysqli_query($db, "INSERT INTO usuarios(email, name, password) VALUES ('$email', '$nombre','$password');");

header('Location: unidad8.php?register=TRUE');
?>