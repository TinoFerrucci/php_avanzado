<?php session_start(); ?>
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
		<h2>Consultas</h2>
		<form method="POST" action="cargar.php">
			<input type="text" name="nombre" id="nombre" required class="persona" placeholder="Nombre*">
			<input type="text" name="apellido" id="apellido" required class="persona" placeholder="Apellido*">
			<br>
			<input type="text" name="email" id="email" required class="correo" placeholder="Correo*">
			<br>
			<textarea type="text" name="consulta" id="consulta" required class="consulta" placeholder="Consulta (de no más de 300 caracteres)*" maxlength="300" rows=4></textarea>
			<br>
			<?php
				// Creo una función para poder generar un captcha de 6 caracteres de longitud
				function crear_captcha(){
					$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHYJKLMNOPQRSTUVWXYZ0123456789-_$%';
					$captcha = '';

					for ($i = 0; $i < 6; $i++){
						$index = rand(0, strlen($characters) - 1);
						$captcha .= $characters[$index];
					}

					return $captcha;
				}
				
				// Guardo el captcha en una variable y a continuación la guardo en la session
				$captcha = crear_captcha();
				$_SESSION['captcha'] = $captcha;
			?>
			<img src="crear_imagen_captcha.php" class="captcha_img">
			<br>
			<input type="text" name='captcha_usuario' required class='captcha'>
			<br>
			<input type="submit" value="Enviar" class="enviar">
		</form>

		<?php
			// Evaluo si se hizo una consulta, en caso de haberse hecho tenemos la posibilidad de reiniciar la session para dejar de ver el mensaje de confirmacion
			if (isset($_SESSION['consulta'])){
				if ($_SESSION['consulta']){
					echo "<p>Consulta enviada con éxito!</p>";
				}
				else{
					echo "<p>Captcha incorrecto, reintentelo.</p>";
				}?>
			<a href="reset_unidad5_session.php" style="border: 1px solid black;">Eliminar sesion</a>
			<?php
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
	.persona{
		display:block;
		width: 40%;
		font-size:15px;
		float:left;
		margin: 0 4%;
	}
	.correo {
		margin: 5px 4%;
		display:block;
		width: 89%;
		font-size: 15px;
		float:left;
		color:#555555;
	}
	.consulta{
		margin: 10px 4%;
		display:block;
		width: 89%;
		font-size: 15px;
		float:left;
		color:#555555;
		resize: none;
	}
	.captcha_img{
		display:block;
		float:left;
		margin: 0 17.72%;
	}
	.captcha{
		display:block;
		width: 40%;
		font-size:16px;
		float:left;
		margin: 0 4%;
	}
	.enviar{
		display:block;
		width:90%;
		float:left;
		margin: 2px 4%;
	}
</style>
</html>