<?php
// Defino la ruta relativa a la imagen a reducir
$path_imagen = "archivos/unidad4.jpg";

// Creamos la imagen ya sabiendo que es jpeg
$imagen = imagecreatefromjpeg($path_imagen);

// Definimos el alto y el ancho del thumbnail
$alto = 150;
$ancho = 150;

// Creamos una plantilla de imagen a partir del tamaño
$thumbnail = imageCreate($alto, $ancho);
ImageCopyResized($thumbnail, $imagen, 0, 0, 0, 0, $ancho, $alto, imagesx($imagen), imagesy($imagen));

// Guardamos el thumbnail una vez ya creado
imagejpeg($thumbnail, "archivos/thumbnail.jpg");

// Destruimos las imagenes para liberar memoria
imagedestroy($imagen);
imagedestroy($thumbnail);
?>