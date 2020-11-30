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
    <title>Ordenar</title>
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
        
    <div class="d-flex align-items-center main-container">
        <div class="container d-flex justify-content-center">
            <div class="card p-4 text-center" style="min-width: 400px">
                <h1>Complete este formulario para ordenar tu reparación</h1>
                <form action="orderManager.php" method="post">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Primer nombre</label>
                            <input type="text" name="nom1" class="form-control">
                        </div>    

                        <div class="col-md-6 form-group">
                            <label>Segundo nombre</label>
                            <input type="text" name="nom2" class="form-control">
                        </div> 

                        <div class="col-md-6 form-group">
                            <label>Primer apellido</label>
                            <input type="text" name="ape1" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Segundo apellido</label>
                            <input type="text" name="ape2" class="form-control">
                        </div>
                        
                        <div class="col-md-6 form-group">
                            <label>Telefono de contacto</label>
                            <input type="tel" name="tel" class="form-control">
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Correo electrónico</label>
                            <input type="email" name="email" class="form-control">
                        </div>

                        
                        <!-- Dropdown list Modelo -->
                        <div class="form-group col-md-6">
                            <label>Modelo</label>
                            <select name="modelo" class="form-control">
                                <option selected=""> Seleccionar...</option>
                                <option value="6"> iPhone 6</option>
                                <option value="6s"> iPhone 6s</option>
                                <option value="6+"> iPhone 6 Plus</option>
                                <option value="6s+"> iPhone 6s Plus</option>
                                <option value="7"> iPhone 7</option>
                                <option value="7+"> iPhone 7 Plus</option>
                                <option value="8"> iPhone 8</option>
                                <option value="8+"> iPhone 8 Plus</option>
                                <option value="x"> iPhone X</option>
                                <option value="xr"> iPhone XR</option>
                                <option value="xsmax"> iPhone XS Max</option>
                            </select>
                        </div>

                        <!-- Dropdown list Reparacion -->
                        <div class="form-group col-md-6">
                            <label>Reparación</label>
                            <select name="reparacion" class="form-control">
                                <option selected=""> Seleccionar...</option>
                                <option value="pantallas"> Pantalla</option>
                                <option value="baterias"> Batería</option>
                            </select>
                        </div>   

                        <div class="col form-group">                           
                            <hr>
                            <input type="submit" class="btn btn-lg btn-dark" value="Enviar formulario">
                        </div>                             
                            
                    </div>

                    
                </form>   
            </div>  
        </div>
    </div>
    
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