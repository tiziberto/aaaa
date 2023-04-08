<?php
$host = "localhost";
$user = "root";
$password = "root123";
$database = "paginareservas";

echo "Pedro";

$conexion = mysqli_connect($host, $user, $password, $database);

$sql = "INSERT INTO personas (nombre, apellido, contraseña, documento, provincia) VALUES ('pepe', 'gomez', '412', '10000', 'Buenos Aires')";

mysqli_query($conexion, $sql);

mysqli_close($conexion);
?>