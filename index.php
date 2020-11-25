<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="css/estiloInicioSesion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<header>
    <?php
    require_once('header.php');
    ?>
</header>
<!--Login-->
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Inicio de sesión</h5>
                    <form class="form-signin" action="logInSucces.php" method="post">
                        <div class="form-label-group">
                            <label for="inputEmail">Correo:</label>
                            <input type="email" name="user" class="form-control" placeholder="Usuario" required
                                   autofocus>
                            <br>
                        </div>
                        <div class="form-label-group">
                            <label for="inputPassword">Contraseña:</label>
                            <input type="password" id="inputPassword" name="pass1" class="form-control"
                                   placeholder="Contraseña" required>
                            <br>
                        </div>

                        <button class="btn btn-lg btn-dark btn-block" type="submit">Iniciar Sesión</button>
                        <hr class="my-4">
                        <label for="registrate">¿Aún no tienes cuenta?</label>
                        <a href="signUp.php" class="btn btn-secondary btn-sm" role="button" aria-pressed="true">Registrar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class='page-footer font-small bg-dark pt-4'>
    <?php
    require_once('footer.php')
    ?>
</footer>
<!--js-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
</body>

</html>