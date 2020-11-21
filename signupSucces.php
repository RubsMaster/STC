<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title
    ><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/loginSucces.css">
</head>
<body>
    <header>
        <?php
            require_once('header.php');            
        ?>
    </header>
    <?php
    include('conexion.php');
    ?>
    <?php
        
        if (isset($_POST['registrar'])){
            if (strlen($_POST['usuario']) >= 1 && strlen($_POST['contra']) >= 1);{

                $user = trim($_POST['usuario']);
                $pass = trim($_POST['contra']);
                
                
                $consulta = "INSERT INTO usuarios (usuario, contra) VALUES ('$user','$pass')";
                $resultado = mysqli_query($conex,$consulta);
                if ($resultado){
                    ?>
                        <center>
                            <div class="alert alert-success" role="alert">
                                Usuario registrado con éxito!
                            </div>
                        </center>
                    <?php
                }
            }
        }
    ?>
    
    







    <!--footer-->
    <footer class='page-footer font-small bg-dark pt-4' style="color:whitesmoke;">
        <?php
            require_once('footer.php')
        ?>
    </footer>

    <!--JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>