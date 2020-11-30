<?php
    session_start();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location:index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/headerStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
    <link rel="stylesheet" href="css/acercaDeestilos.css">
</head>
<body>
    <header>
        <?php
            include('includes/header.php');
        ?>
    </header>
    <!--Informacion-->
    <div class="container bg-dark mb-3" id="parrafo1" style="padding-top: 20px;">
        <h1>¿Quienes somos?</h1>
        <p>Servicio Técnico Celular (STC) es una empresa fundada en 2017 por Rubén Soto, Kevin Sandoval y Hugo Luján dedicada a ofrecer el servicio de reparación de telefonía celular en diversos municipops dentro del estado de Chihuahua, México.</p>
        <p>Contando con técnicos altamente capacitados, STC ofrece una amplia gama de servicios para ambas ramas de reparación; Software y Hardware.</p>
        <p>Gracias al nivel de preparación que tenemos, podemos ofrecer el servicio para cualquier marca de celulares.</p>
    </div>
    <div class="container bg-dark mb-3" id="parrafo2" >
        <h2 style="text-align: center;">Hardware</h2>
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
    <div class="container bg-dark mb-3" id="parrafo3">
        <h2 style="text-align: center;">Software</h2>
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
    <!--
    <div class="container bg-dark mb-3" id="parrafo4">
        <center>
            <h1 style="color: whitesmoke;">Sucursales autorizadas</h1>

            <div class="container" style="padding-bottom: 20px; padding-top: 20px;">
                <div class="row">
                    <div class="col-sm mb-3 mb-md-0">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Movistar Aldama</h5>
                                <p class="card-text">Sucursal ubicada en la ciudad de Alcama, Chihuahua.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Responsable: </b>Sr. Jesús Arrieta.</li>
                                <li class="list-group-item"><b>Contacto: </b> Cel: 614-319-1000</li>
                                <li class="list-group-item"><b>Horario: </b>Lunes a Sábado de 10:00hrs a 19:00hrs</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Ubicación</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm mb-3 mb-md-0">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Movistar Aldama</h5>
                                <p class="card-text">Sucursal ubicada en la ciudad de Alcama, Chihuahua.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Responsable: </b>Sr. Jesús Arrieta.</li>
                                <li class="list-group-item"><b>Contacto: </b> Cel: 614-319-1000</li>
                                <li class="list-group-item"><b>Horario: </b>Lunes a Sábado de 10:00hrs a 19:00hrs</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Ubicación</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm mb-3 mb-md-0">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Movistar Aldama</h5>
                                <p class="card-text">Sucursal ubicada en la ciudad de Alcama, Chihuahua.</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Responsable: </b>Sr. Jesús Arrieta.</li>
                                <li class="list-group-item"><b>Contacto: </b> Cel: 614-319-1000</li>
                                <li class="list-group-item"><b>Horario: </b>Lunes a Sábado de 10:00hrs a 19:00hrs</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Ubicación</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div>
-->

    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
                                                    <!--js script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>