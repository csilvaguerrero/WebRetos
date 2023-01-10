<!--Cristian Silva Guerrero-->
<?php

	include 'conexion.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Categorías</title>
		<meta charset="UTF-8">
		<meta name="author" content="Cristian Silva Guerrero">
		<link href="estilocss.css" rel="StyleSheet" type="text/css"/>
	</head>
	<body>
		<a href="formulario.php">
			Añadir categoría
		</a>
		<div id=divTabla>
			<table id=tabla>
				<thead>
					<th>
						ID
					</th>
					<th>
						CATEGORÍA
					</th>
					<th>
						BORRAR
					</th>
					<th>
						MODIFICAR
					</th>
				</thead>
				<tbody>
						<?php while($mostrar = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $mostrar['idCategorias']; ?></td>
								<td><?php echo $mostrar['nombreCategoria']; ?></td>
								<td><a href="eliminar.php?id=<?php echo $mostrar['idCategorias']; ?>"><img src="borrar.svg"/></a></td>
								<td><a href="modificar.php?id=<?php echo $mostrar['idCategorias']; ?>"><img src="editar.svg"/></a></td>
							</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</body>
</html>