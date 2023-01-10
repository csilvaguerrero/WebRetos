<?php

	//ELIMINAR
	
	const servidor = "2daw.esvirgua.com";
	const usuario = "user2daw_18";
	const contrasenia = "3qYED~*]0ZQ7";
	const bbdd = "user2daw_BD1-18";
		
	$mysqli = new mysqli(servidor, usuario, contrasenia, bbdd);

	$id = $_GET['id'];
	
	if ($mysqli->connect_errno)
		echo $mysqli->connect_error;
	
	$sql = "DELETE FROM Categorias WHERE idCategorias = ".$id.";";
	
	$resultado = $mysqli->query($sql);
	
	$mysqli->close();
	

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Borrar</title>
		<meta charset="UTF-8">
		<meta name="author" content="Cristian Silva Guerrero">
		<link href="estilocss.css" rel="StyleSheet" type="text/css"/>
	</head>
	<body>
		<h2>BORRADO CON ÉXITO</h2>
		<br>
		<br>
		<a href="index.php">
			<input type="submit" value="Volver"/>
		</a>
	</body>
</html>
