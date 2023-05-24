<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Eventos</h2>
		<?php $time = getdate();?> 
		<form method='POST' action='calculo_fecha.php'>
			<label for="dia">Dia:</label>
			<input type="number" name='dia' min=1 max=31 value=<?php echo $time['mday'];?>>
			<label for="mes">Mes:</label>
			<input type="number" name='mes' min=1 max=12 value=<?php echo $time['mon'];?>>
			<label for="anio">Año:</label>
			<input type="number" name='anio' min=1900 max=2100 value=<?php echo $time['year'];?>>

			<input type="submit" value='Calcular' name='calcular'>
		</form>
		<?php if (isset($_GET['fecha'])){echo "<p>".$_GET['fecha']."</p>";} ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>