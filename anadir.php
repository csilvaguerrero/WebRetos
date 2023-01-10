<?php
	
	//AÑADIR
	
	const servidor = "2daw.esvirgua.com";
	const usuario = "user2daw_18";
	const contrasenia = "3qYED~*]0ZQ7";
	const bbdd = "user2daw_BD1-18";
		
	$mysqli = new mysqli(servidor, usuario, contrasenia, bbdd);
	
	$nombre = $_POST["nombre"];	
	
	if ($mysqli->connect_errno)
		echo $mysqli->connect_error;
	
	if (empty($nombre)){
		echo "Ningun valor introducido por teclado. Introdúzcalo de nuevo.";
		die;
	}
	else{
		echo "<h2>DATOS AÑADIDOS CORRECTAMENTE</h2>";
	}
	
	$insert = "INSERT INTO Categorias (nombreCategoria) VALUES('".$nombre."');";
	
	$resultado = $mysqli->query($insert);
	
	$mysqli->close();
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Añadir</title>
		<meta charset="UTF-8">
		<meta name="author" content="Cristian Silva Guerrero">
		<link href="estilocss.css" rel="StyleSheet" type="text/css"/>
	</head>
	<body>
		<a href="index.php">
			<input type="submit" value="Volver"/>
		</a>
	</body>
</html>