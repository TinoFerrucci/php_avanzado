<?php
include('conection.php');


$unidad = $_POST['unidad'];
$fecha = $_POST['fecha'];

mysqli_query($db, "INSERT INTO clases(unidad, fecha) VALUES ('$unidad', '$fecha');");

header('Location: unidad1.php?ok');
?>