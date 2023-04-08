<?php
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $contraseña = $_REQUEST['contraseña'];
    $confir_contraseña = $_REQUEST['confir_contraseña'];
    $documento = $_REQUEST['documento'];
    $fecha_nacimiento = $_REQUEST['fecha_nacimiento'];
    $provincia = $_REQUEST['provincia'];

    echo "El nombre es $nombre y el doc es $documento";