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
		<?php if (!isset($_SESSION['user'])){?>
		<h2>Login</h2>
		<form method='POST' action='verificarusuario.php'>
			<input type="text" name="email" id="emailLogin" placeholder='email' required>
			<input type="password" name="password" id="passwordLogin" placeholder='password' required>
			<input type='submit' value='Ingresar' id='botonLogin'>
		</form>
			<?php if (isset($_GET['fail_login'])){
				echo '<p>Credenciales incorrectas.</p>'	;
			}?>
		<h2>Registro</h2>
		<form method='POST' action='cargarusuario.php'>
			<input type="text" name="nombre" id="nombreRegister" placeholder='nombre' required maxlength="40">
			<input type="text" name="email" id="emailRegister" placeholder='email' required maxlength="50">
			<input type="password" name="password" id="passwordRegister" placeholder='password' required maxlength="20">
			<input type='submit' value='Registrar' id='botonRegister'>
		</form>
		<?php if (isset($_GET['register'])){
			echo '<p>Usuario registrado con éxito.</p>';
		}
		} else {?>
		<h2>¡Bienvenido!</h2>
		<p>Bienvenido al inicio <?php echo $_SESSION['user']; ?>!!</p>
		<a href='reset_unidad8_session.php' id='cerrar_sesion'>Salir</a>
		<?php } ?>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>

<style>
	#emailLogin, #passwordLogin{
		width:300px;
		margin:10px;
	}
	#botonLogin, #botonRegister{
		width: 640px;
		margin-left:10px;
		background-color:cyan;
	}
	#nombreRegister, #emailRegister, #passwordRegister{
		width:189px;
		margin:10px;
	}
	#cerrar_sesion{
		color:red;
	}
</style>
</html>