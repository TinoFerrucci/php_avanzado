<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <?php session_start(); ?>
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
		<h2>Usuarios</h2>
		<form method='POST' action='caract_usuarios.php'>
			<input type="text" name="nombre" id="nombre" required>
			<input type="text" name="apellido" id="apellido" required>
			<input type="date" name="fecha" required>

			<input type="submit" value='Ingresar' name='ingresar'>
		</form>
		<?php if (isset($_SESSION['user'])){echo $_SESSION['user'];} ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>