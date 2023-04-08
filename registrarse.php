<?php
	//conexion a la base 
	$host = "localhost";
	$user = "root";
	$password = "";
	$database = "paginareservas";

	$conexion = mysqli_connect($host, $user, $password, $database);

	if (!$conexion) {
		die("Conexión fallida: " . mysqli_connect_error());
	}
	// Verifica si el formulario ha sido enviado
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		// Recupera los valores enviados por el formulario
		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$contraseña = $_POST['contraseña'];
		$confir_contraseña = $_POST['confir_contraseña'];
		$documento = $_POST['documento'];
		$fecha_nacimiento = $_POST['fecha_nacimiento'];
		$provincia = $_POST['provincia'];
		
		// Realiza la validación de los datos
		$errores = array();
		
		if (empty($nombre)) {
			$errores[] = 'El nombre es obligatorio.';
		}
		
		if (empty($apellido)) {
			$errores[] = 'El apellido es obligatorio.';
		}
		
		if (empty($contraseña)) {
			$errores[] = 'La contraseña es obligatoria.';
		}
		
		if (empty($confir_contraseña)) {
			$errores[] = 'La confirmación de la contraseña es obligatoria.';
		} elseif ($contraseña != $confir_contraseña) {
			$errores[] = 'Las contraseñas no coinciden.';
		}
		
		if (empty($documento)) {
			$errores[] = 'El número de documento es obligatorio.';
		}
		
		if (empty($fecha_nacimiento)) {
			$errores[] = 'La fecha de nacimiento es obligatoria.';
		}
		
		if (empty($provincia)) {
			$errores[] = 'La provincia de residencia es obligatoria.';
		}
		
		// Si no hay errores, procesa los datos
		if (empty($errores)) {
			
			// Procesa los datos
			$sql = "INSERT INTO personas (nombre, apellido, contraseña, documento, provincia) VALUES ('$nombre', '$apellido', '$contraseña', '$documento', '$provincia')";

			if (mysqli_query($conexion, $sql)) {
				echo "Los datos han sido ingresados correctamente en la base de datos";
			} else {
				echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
			}

			mysqli_close($conexion);
			// Redirige al usuario a una página de confirmación
			header("Location: index.html");
			exit();
		}
	}
?> 