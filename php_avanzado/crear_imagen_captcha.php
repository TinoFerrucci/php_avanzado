<?php
// Crea la imagen captcha
session_start();
header('Content-type: image/jpeg');
$imagen = imagecreate(100, 30);
$color_fondo = imagecolorallocate($imagen, 0, 0, 0);
$color_letra = imagecolorallocate($imagen, 255, 255, 255);
imagestring($imagen, 10, 20, 10, $_SESSION['captcha'], $color_letra);
imagejpeg($imagen);
?>