<?php
include('conection.php');

$res = mysqli_query($db, "SELECT * FROM clases");

if(mysqli_num_rows($res) > 0){
    echo "<table id='tabla_clases'><tr><th>Id</th><th>Unidad</th><th>Fecha</th></tr>";
    while($row = mysqli_fetch_assoc($res)){
        echo "<tr><td>".$row['id_clase']."</td><td>".$row['unidad']."</td><td>".$row['fecha']."</td></tr>";
    }
    echo "</table>";
} else{
    echo "<h3>No hay unidades registradas aún</h3>";
}
?>