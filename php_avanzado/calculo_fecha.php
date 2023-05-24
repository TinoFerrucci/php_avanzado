<?php
// Seteamos el huso horario
date_default_timezone_set("America/Argentina/Buenos_Aires");
// Creamos una funcion para calcular la fecha
function calcular_fecha($dia, $mes, $anio){
    // Primero evaluamos si la fecha ingresada es correcta
    if(checkdate($mes, $dia, $anio)){
        // Nos interesa evaluar unicamente si la fecha ingresada coincide con la fecha actual (sin importar la hora).
        $fecha_actual = date('d-m-Y');
        // Transformamos los parametros en una fecha
        $fecha_ingresada = "$dia-$mes-$anio";
        $fecha_calculada = intval((strtotime($fecha_ingresada) - strtotime($fecha_actual)) / 86400);

        if ($fecha_calculada > 0){
            return "Para la fecha $fecha_ingresada faltan $fecha_calculada dias.";
        } else if ($fecha_calculada < 0){
            return "La fecha $fecha_ingresada fue hace ".($fecha_calculada*(-1)).' dias.';
        } else{
            return "¡Estamos en la fecha ingresada!";
        }
    } else {
        return 'La fecha ingresada no es valida.';
    }
}

// Recibimos los valores del post
$dia = $_POST['dia'];
$mes = $_POST['mes'];
$anio = $_POST['anio'];

// Guardamos el resultado en una variable
$fecha_calculada = calcular_fecha($dia, $mes, $anio);

// Redirigimos a la pagina
header("Location: unidad2.php?fecha=$fecha_calculada");
?>