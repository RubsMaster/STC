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
    <title>Order</title>
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
        include_once('includes/eng_header.php');
        ?>
    </header>
    
    <?php

        include('config.php');
        $modelo1 = $_POST["modelo"];
        $repa1 = $_POST["reparacion"];
        $nom1 = $_POST['nom1'];
        $nom2 = $_POST['nom2'];
        $ape1 = $_POST['ape1'];
        $ape2 = $_POST['ape2'];
        $tel = $_POST['tel'];
        $usuario = $_SESSION['username'];
        $email = $_POST['email'];

        $SQL1_READ="INSERT INTO ordenes (usuario, nom_orden, nom2_orden, ape_orden, ape2_orden, tel, email) VALUES ('$usuario','$nom1','$ape1','$nom2','$ape2','$tel','$email')";
        $sql1_query=mysqli_query($con,$SQL1_READ);

        $SQL_READ = "SELECT id_orden FROM `ordenes` WHERE email = '$email'";
        $sql_query = mysqli_query($con,$SQL_READ);

        while($row = mysqli_fetch_array($sql_query)){
            echo "
            <center>
                <div class='container'>
                    <div class='alert alert-success' role='alert mb-3'>
                        <h1 class='alert-heading'>Order made succesfully!</h1>
                        <p>Your track ID is: </p>
                        <h1><b>".$row['id_orden']."</b></h1>
                        <p>Your track E-Mail is: </p>
                        <h2><b>".$email."</b></h2>
                        <hr>
                        <p class='mb-0'>If you want to track your order, click the button.</p>
                        <a href ='eng_tracking.php'><button type='button' class='btn btn-secondary btn-lg btn-block'>Track</button></a>
                    </div>
                </div>
            </center>";
        }
?>
    
    
    <center>
    
        <div class="container mb-3">
            <div class="card">
                <h5 class="card-header">Order resume</h5>
                <div class="card-body">
                    <p class="card-text"><b>Username: </b><?php echo $usuario ?></p>
                    <p class="card-text"><b>Name (s): </b><?php echo $nom1 ?> <?php echo $nom2 ?></p>
                    <p class="card-text"><b>Last name (s): </b><?php echo $ape1 ?> <?php echo $ape2 ?></p>
                    <p class="card-text"><b>Contact: </b> <?php echo $tel ?></p>
                    <p class="card-text"><b>Model order: </b><?php echo $modelo1?></p>
                    <p class="card-text"><b>Repair order: </b><?php echo $repa1?></p>
                </div>
            </div>
        </div>
    </center>
    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
                                            <!--JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>