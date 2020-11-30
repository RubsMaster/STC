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
    <title>Cotizador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/headerStyle.css">
    <link rel="stylesheet" href="css/footerStyle.css">
</head>
<body>
    <header>
        <?php
        include_once('includes/header.php');
        ?>
    </header>
    
    <div class="containter" style="padding-top: 20px;">
        <?php
            include('config.php');
            $modelo = $_POST["modelo"];
            $repa = $_POST["reparacion"];

            if($repa == "baterias"){
                $SQL_READ = "SELECT precio FROM `baterias` WHERE modelo = '$modelo'";
                $sql_query = mysqli_query($con,$SQL_READ);

                while($row = mysqli_fetch_array($sql_query)){
                    echo "
                    <center>
                        <div class='alert alert-success' role='alert'>
                            <h1 class='alert-heading'>¡Cotización realizada con éxito!</h1>
                            <p>El precio para la batería de tu dispositivo tiene un costo de:</p>
                            <h1><b>$".$row['precio']."</b></h1>
                            <hr>
                            <p class='mb-0'>Si deseas levantar tu orden de reparación, da clic en el botón.</p>
                            <a href ='order.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Ordenar</button></a>
                        </div>
                    </center>";
                }
                } else{
                    $SQL_READ = "SELECT precio FROM `pantallas` WHERE modelo = '$modelo'";
                    $sql_query = mysqli_query($con,$SQL_READ);

                    while($row = mysqli_fetch_array($sql_query)){
                        echo "
                            <center>
                                <div class='alert alert-success mb-3' role='alert'>
                                    <h1 class='alert-heading'>¡Cotización realizada con éxito!</h1>
                                    <p>El precio para la pantalla de tu dispositivo tiene un costo de:</p>
                                    <h1><b>$".$row['precio']."</b></h1>
                                    <hr>
                                    <p class='mb-0'>Si deseas levantar tu orden de reparación, da clic en el botón.</p>
                                    <a href ='order.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Ordenar</button></a>
                                </div>
                            </center>";
                    }
                }
        ?>
    </div>
    
    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            require_once('includes/footer.php');
        ?>
    </footer>
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>