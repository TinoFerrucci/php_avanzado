<?php
// Establecer huso horario
date_default_timezone_set("America/Argentina/Buenos_Aires");

// Declaración de variables
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];
$fecha = getdate();

// Declaración de texto para agregar comentario
$texto = "<div class='comentario_box'>
    <p class='persona'>$nombre $apellido</p>
    <p class='correo'>$correo</p>
    <p class='comentario'>$comentario</p>
    <p class='fecha'>Creado: ".$fecha['mday']."/".$fecha['mon']."/".$fecha['year']." ".$fecha['hours'].":".$fecha['minutes']."</p>
</div>";


// Abrimos el archivo (o lo creamos), cargamos el texto y lo cerramos
$f = fopen('archivos/comentarios.txt', 'a');
fwrite($f, $texto);
fclose($f);

// Nos redirigimos a unidad3.php nuevamente
header('Location: unidad3.php');
?>