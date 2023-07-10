<?php
session_start();
include_once('conection.php');
include_once('user_class.php');
$db_connection = new BaseDatos();

$email = $_POST['email'];
$passwordLogin = $_POST['password'];

$user = new Usuario($email, '', $passwordLogin, $db_connection);

if($user->verify_user()){
    $_SESSION['user'] = $user->get_name();
    header('Location: unidad8.php');
} else {
    header('Location: unidad8.php?fail_login=TRUE');
}