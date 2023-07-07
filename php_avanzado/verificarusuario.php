<?php
session_start();
include_once('conection.php');

$email = $_POST['email'];
$passwordLogin = $_POST['password'];

$res = mysqli_query($db, "SELECT * FROM usuarios WHERE email='$email'");
if(mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_assoc($res);
    $passwordDB = $row['password'];
    if (password_verify($passwordLogin, $passwordDB)){
        $_SESSION['user'] = $row['name'];
        header('Location: unidad8.php');
    } else{
        header('Location: unidad8.php?fail_login=TRUE');
    }
} else{
    header('Location: unidad8.php?fail_login=TRUE');
}