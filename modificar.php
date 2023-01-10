<?php

	//	MODIFICAR
	
	if (isset($_GET['id'])){
		include 'conexion.php';
	
		$id = $_GET['id'];
			
		if ($mysqli->connect_errno)
			echo $mysqli->connect_error;
		
		$sql = "SELECT nombreCategoria FROM Categorias WHERE idCategorias = ".$id.";";
		
		$resultado = $mysqli->query($sql);
		
		$mostrar = $resultado->fetch_array(MYSQLI_ASSOC);
		
		echo '<!DOCTYPE html>
			<html>
				<head>
					<meta charset="UTF-8">
					<meta name="author" content="Cristian Silva Guerrero">
					<link href="estilocss.css" rel="StyleSheet" type="text/css"/>
				</head>
				<body>
					<div id=divFormulario>
						<form id=formulario method="post" action="modificar.php?id='.$id.'">
							<h2>Categorías</h2>
							<input id=cajaTexto type="text" placeholder="Categoría" name="nombre" value='.$mostrar['nombreCategoria'].'>
							<input id="botonEnviar" type="submit"/>
						</form>
					</div>
				</body>
			</html>';
		
		$mysqli->close();
	}
	
	
	if (isset($_POST['nombre'])){
		
		include 'conexion.php';
		
		$id = $_GET['id'];
		
		$nombre = $_POST['nombre'];
		
		$sql = "UPDATE Categorias SET nombreCategoria = '".$nombre."' WHERE idCategorias = ".$id.";";
		
		$resultado = $mysqli->query($sql);
		
		$mysqli->close();
	}

	

?>

