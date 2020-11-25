<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STC - Acerca De</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/acercaDeestilos.css">
</head>
<header>
    <?php
        require_once('header.php');
    ?>
</header>
<body>
    <!--Informacion-->
    <div class="container bg-secondary" id="parrafo1">
        <h1>¿Quienes somos?</h1>
        <p>Servicio Técnico Celular (STC) es una empresa fundada en 2017 por Rubén Soto, Kevin Sandoval y Hugo Luján dedicada a ofrecer el servicio de reparación de telefonía celular en diversos municipops dentro del estado de Chihuahua, México.</p>
        <p>Contando con técnicos altamente capacitados, STC ofrece una amplia gama de servicios para ambas ramas de reparación; Software y Hardware.</p>
        <p>Gracias al nivel de preparación que tenemos, podemos ofrecer el servicio para cualquier marca de celulares.</p>
    </div>
    <div class="container bg-secondary" id="parrafo2">
        <h2>Hardware</h2>
        <p>
            <ul>
                <li>Centro de carga.</li>
                <li>Reparación de botones (Encendido, volumen y home)</li>
                <li>Micrófonos.</li>
                <li>Recuperación de flexores rotos.</li>
                <li>Cambio de refacciones (Bocinas, pantallas, táctiles, baterias, etc)</li>
            </ul>
        </p>
    </div>
    <div class="container bg-secondary" id="parrafo3">
        <h2>Software</h2>
        <p>
            <ul>
                <li>Liberación de compañía</li>
                <li>Desbloqueo de patrón</li>
                <li>Desbloqueo de FRP</li>
                <li>Reparación de señal</li>
                <li>Reparación de partición BOOT (Equipos que no cargan el sistema operativo)</li>
                <li>Carga de software</li>
            </ul>
        </p>
    </div>
    
<!-- Footer -->
<footer class='page-footer font-small bg-dark pt-4' >
<?php
require_once ('footer.php')
?>
</footer>
    <!--JS script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>