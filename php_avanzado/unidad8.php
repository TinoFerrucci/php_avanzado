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
		<form method='POST' action='verificarusuario.php' class='login-container'>
			<input type="email" name="email" id="emailLogin" placeholder='email*' required>
			<input type="password" name="password" id="passwordLogin" placeholder='password*' required>
			<input type='submit' value='Ingresar' id='botonLogin'>
		</form>
			<?php if (isset($_GET['fail_login'])){
				echo '<p align="center">Credenciales incorrectas.</p>'	;
			}?>
		<h2>Registro</h2>
		<form method='POST' action='cargarusuario.php' class='register-container'>
			<input type="text" name="nombre" id="nombreRegister" placeholder='nombre*' required maxlength="40">
			<input type="email" name="email" id="emailRegister" placeholder='email*' required maxlength="50">
			<input type="password" name="password" id="passwordRegister" placeholder='password*' required maxlength="20">
			<input type='submit' value='Registrar' id='botonRegister'>
		</form>
		<?php if (isset($_GET['register'])){
			if ($_GET['register'] == 'TRUE'){
				echo '<p align="center">Usuario registrado con éxito.</p>';
			} else {
				echo '<p align="center">El usuario no se puede registrar, es posible que ya esté creado.</p>';
			}
		}
		} else {?>
		<h2>¡Bienvenido!</h2>
		<p>Bienvenido al inicio <?php echo $_SESSION['user']; ?>!!</p>
		<a href='reset_unidad8_session.php' id='cerrar_sesion'>Salir</a>
		<?php } ?>
		
		<div style='height:100px;'></div>


	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>

<style>
  .login-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 4px;
  }

  .login-container h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .login-container input[type="email"],
  .login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .login-container input[type='submit'] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .login-container input[type='submit']:hover {
    background-color: #45a049;
  }

  .register-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f2f2f2;
    border-radius: 4px;
  }

  .register-container h2 {
    text-align: center;
    margin-bottom: 20px;
  }

  .register-container input[type="text"],
  .register-container input[type="email"],
  .register-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .register-container input[type='submit'] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .register-container input[type='submit']:hover {
    background-color: #45a049;
  }

  #cerrar_sesion{
	width: 100px;
    padding: 10px;
    background-color: #DD0000;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  #cerrar_sesion:hover{
	background-color: #FF0000;
  }
</style>
</html>