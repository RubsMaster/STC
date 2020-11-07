<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/estiloRegistrar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        require_once('header.php');
        ?>
    </header>
    <!--registrar-->
    <div class="container" style="padding-top: 20px;">




        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Registrar</h4>
                    </header>
                    <article class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label>Nombre(s)</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div> <!-- form-group end.// -->
                                <div class="col form-group">
                                    <label>Apellido(s)</label>
                                    <input type="text" class="form-control" placeholder=" ">
                                </div> <!-- form-group end.// -->
                            </div> <!-- form-row end.// -->
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input type="email" class="form-control" placeholder="">
                                <small class="form-text text-muted">No se enviarán mensajes muplicitarios.</small>
                            </div> <!-- form-group end.// -->
                            <div class="form-group">
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="option1">
                                    <span class="form-check-label"> Hombre </span>
                                </label>
                                <label class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" value="option2">
                                    <span class="form-check-label"> Mujer</span>
                                </label>
                            </div> <!-- form-group end.// -->
                            <!-- form-row.// -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control">
                                </div> <!-- form-group end.// -->
                                <div class="form-group col-md-6">
                                    <label>Estado</label>
                                    <select id="inputState" class="form-control">
                                        <option> Seleccionar...</option>
                                        <option selected="">Chihuahua</option>
                                    </select>
                                </div>
                                <!--contrasena-->
                                <div class="form-group col-md-6">
                                    <label>Crear contrasña</label>
                                    <input class="form-control" type="password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirmar contraseña</label>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <!-- form-group end.// -->
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-block">Registrar</button>
                            </div> <!-- form-group// -->
                        </form>
                    </article> <!-- card-body end .// -->
                    <div class="border-top card-body text-center">¿Ya tienes cuenta? <a href="inicioSesion.html">Inicia sesión</a></div>
                </div> <!-- card.// -->
            </div> <!-- col.//-->
        </div> <!-- row.//-->
    </div>
    </article>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark pt-4">

    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>