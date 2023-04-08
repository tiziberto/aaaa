<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "paginareservas";

	echo "Usuario cargado con exito";

	$conexion = mysqli_connect($host, $user, $password, $database);
	
	$nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $contraseña = $_REQUEST['contraseña'];
    $confir_contraseña = $_REQUEST['confir_contraseña'];
    $documento = $_REQUEST['documento'];
    $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
    $provincia = $_REQUEST['provincia'];

	$sql = "INSERT INTO personas (nombre, apellido, contraseña, documento, provincia) VALUES ('$nombre', '$apellido', '$contraseña', '$documento', '$provincia')";

	mysqli_query($conexion, $sql);

	mysqli_close($conexion);
?>