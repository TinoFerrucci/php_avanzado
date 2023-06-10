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
		<h2>Comentarios</h2>
		<form method="POST" action="comentarios.php">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" required>
			<br>
			<label for="apellido">Apellido: </label>
			<input type="text" name="apellido" required>
			<br>
			<label for="correo">Correo: </label>
			<input type="mail" name="correo" required>
			<br>
			<label for="comentario">Comentario: </label>
			<textarea name="comentario" required></textarea>
			<br>
			<input type="submit" value="Enviar">
		</form>
		<?php
			if (file_exists('archivos/more/comentarios.txt')){
				$f = fopen('archivos/more/comentarios.txt', 'r');
				fpassthru($f);
				fclose($f);
			} else{
				echo "<p>No existe ningún comentario.</p>";
			}
		?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>

<style>
	.comentario_box{
		width : 100%;
		margin : 0px;
		height: auto;
		border: 1px solid black;
	}
	.comentario_box p{
		margin:0px;
	}
	.persona{
		display:block;
		width: 100%;
		font-size:22px;
		float:left;
		font-weight:bold;
	}
	.correo {
		display:block;
		width: 100%;
		font-size: 15px;
		float:left;
		color:#555555;
	}
	.comentario{
		display:inline-block;
		width: 100%;
		font-size: 15px;
		float:left;
	}
	.fecha{
		font-size: 14px;
		text-align:right
	}
</style>
</html>