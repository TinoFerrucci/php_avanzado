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
		<h2>Agenda de clases</h2>
	</section>
	<aside>
    
	</aside>
	<section>
		<form method="POST" action="insertar_clases.php">
			<input type="text" name="unidad" placeholder="Unidad" maxlength="30" required>
			<input type="date" name="fecha" required>
			<input type="submit" value="Enviar">
		</form>
		<?php if (isset($_GET['ok'])){echo "<p>Unidad registrada con exito.</p>";} ?>
	</section>
	<section>
		<h2>Clases registradas</h2>
		<?php include_once("ver_clases.php"); ?>
	</section>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>

<style>
	#tabla_clases{
	table-layout: fixed;
	width: 100%;
	}

	#tabla_clases th, td {
	border: 1px solid #f06156;
	width: 100px;
	word-wrap: break-word;
	text-align:center;
	}
</style>
</html>