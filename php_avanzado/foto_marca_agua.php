<?php
// Definimos las rutas relativas de las imagenes
$path_watermark = 'archivos/marca.png';
$path_imagen = 'archivos/tino.jpg';

// Creamos las imagenes en memoria (aclaración que ya sabemos de que tipo son)
$watermark = imagecreatefrompng($path_watermark);
$imagen = imagecreatefromjpeg($path_imagen);

// Copiamos la marca de agua dentro de la imagen (en la esquina inferior derecha)
imagecopy($imagen, $watermark, (imagesx($imagen) - imagesx($watermark)), (imagesy($imagen) - imagesy($watermark)), 0, 0, imagesx($imagen), imagesy($imagen));

// Guardamos la imagen en la ruta ingresada
imagejpeg($imagen, "archivos/tino2.jpg");

// Destruimos las imagenes de memoria
imagedestroy($imagen);
imagedestroy($watermark);
?>