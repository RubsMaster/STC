<?php

    $server = "localhost";
    $user = "root";
    $password = "root";
    $db = "integradora";

    $conexion = new mysqli($server, $user, $password, $db);

    if($conexion -> connect_error){
        die("Conexion Fallida" . $conexion-> connect_error);
    }
?>
