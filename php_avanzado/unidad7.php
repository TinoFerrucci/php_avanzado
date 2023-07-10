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
		<h2>Compras</h2>
		<?php
			include_once('productos.php');
			include_once('conection.php');
			include_once('carrito.php');

			$base = new BaseDatos();
			$prod = new Productos($base);
			$carrito = new Carrito($base);

			$mostrar_productos = $prod->listar_productos();
			$mostrar_carrito = $carrito->listar_compra();
		?>
		<table>
			<tr>
				<th>Codigo</th>
				<th>Producto</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th></th>
			</tr>
			<?php
			for ($i=0;$i<count($mostrar_productos);$i++){
				?>
			<tr>
				<td><?php echo $mostrar_productos[$i]['codigo']; ?></td>
				<td><?php echo $mostrar_productos[$i]['producto']; ?></td>
				<td><?php echo $mostrar_productos[$i]['descripcion']; ?></td>
				<td>$<?php echo $mostrar_productos[$i]['precio']; ?></td>
				<td><a class='add_to_cart' href="agregar_carrito.php?codigo=<?php echo $mostrar_productos[$i]['codigo'];?>&producto=<?php echo $mostrar_productos[$i]['producto'];?>&descripcion=<?php echo $mostrar_productos[$i]['descripcion'];?>&precio=<?php echo $mostrar_productos[$i]['precio'];?>">Agregar</a></td>
			</tr>
			<?php
			}
			?>
		</table>
		<h3>Carrito</h3>
		<?php if (count($mostrar_carrito) == 0){
			echo "<p>El carrito está vacío, presiona Agregar para añadir algún producto.</p>";
		} else { 
		$suma = 0; ?>
		<table>
			<tr>
				<th>Codigo</th>
				<th>Producto</th>
				<th>Descripcion</th>
				<th>Precio</th>
				<th></th>
			</tr>
			<?php
			for ($i=0;$i<count($mostrar_carrito);$i++){
				$suma += $mostrar_carrito[$i]['precio'];
				?>
			<tr>
				<td><?php echo $mostrar_carrito[$i]['codigo']; ?></td>
				<td><?php echo $mostrar_carrito[$i]['producto']; ?></td>
				<td><?php echo $mostrar_carrito[$i]['descripcion']; ?></td>
				<td>$<?php echo $mostrar_carrito[$i]['precio']; ?></td>
				<th><a class='delete' href="eliminar_carrito.php?id=<?php echo $mostrar_carrito[$i]['id_compra'];?>">Eliminar</a></th>
			</tr>
			<?php
			}
			?>
		</table>
		<?php 
		echo '<p>Hay un total de ' . count($mostrar_carrito) . ' productos y cuestan $' . $suma . '</p>';
		}?>

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
  /* Estilos generales de la tabla */
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  /* Estilos para la cabecera de la tabla */
  th {
    background-color: #f2f2f2;
    color: #333;
  }

  /* Estilos para las filas impares */
  tr:nth-child(odd) {
    background-color: #f9f9f9;
  }

  /* Estilos para las filas al pasar el cursor por encima */
  tr:hover {
    background-color: #e9e9e9;
  }

  /* Estilos para el botón "Agregar al carrito" */
  .add_to_cart, .delete {
    color: white;
    border: none;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    cursor: pointer;
    border-radius: 4px;
    transition: background-color 0.3s;
  }

  .add_to_cart {
	background-color: #4CAF50;
  }

  .delete {
	background-color: #FF0000;
  }

  .add_to_cart:hover {
    background-color: #45a049;
  }
  
  .delete:hover {
	background-color: #DD0000;
  }
</style>
</html>