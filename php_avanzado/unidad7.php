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
				<td><a href="agregar_carrito.php?codigo=<?php echo $mostrar_productos[$i]['codigo'];?>&producto=<?php echo $mostrar_productos[$i]['producto'];?>&descripcion=<?php echo $mostrar_productos[$i]['descripcion'];?>&precio=<?php echo $mostrar_productos[$i]['precio'];?>">Agregar</a></td>
			</tr>
			<?php
			}
			?>
		</table>
		<h3>Carrito</h3>
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
				?>
			<tr>
				<td><?php echo $mostrar_carrito[$i]['codigo']; ?></td>
				<td><?php echo $mostrar_carrito[$i]['producto']; ?></td>
				<td><?php echo $mostrar_carrito[$i]['descripcion']; ?></td>
				<td>$<?php echo $mostrar_carrito[$i]['precio']; ?></td>
				<th><a href="eliminar_carrito.php?id=<?php echo $mostrar_carrito[$i]['id_compra'];?>">Eliminar</a></th>
			</tr>
			<?php
			}
			?>
		</table>
	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>