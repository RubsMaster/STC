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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/headerStyle.css">
    <link rel="stylesheet" href="css/homeFooter.css">
    <link rel="stylesheet" href="css/acercaDeestilos.css">
</head>
<body>
    <header>
        <?php
            include('includes/eng_header.php');
        ?>
    </header>
    <!--Informacion-->
    <div class="container bg-dark" id="parrafo1">
        <h1>Who we are and what we do</h1>
        <p>Servicio Técnico Celular (STC) It's a company found in 2017 by Rubén Soto, Kevin Sandoval and Hugo Luján dedicated to offer a repairing service of mobile phone devices in multiple municipalities the state of Chihuahua, Mexico.</p>
        <p>We count with technical staff highly trained, STC offers a wide range on reparation service; Software and Hardware.</p>
        <p>due to the service we provide, we can offer our service for any brand of cell phones.</p>
    </div>
    <div class="container bg-dark" id="parrafo2">
        <h2 style="text-align: center;">Hardware</h2>
        <p>
            <ul>
                <li>USB power/Accesory connector</li>
                <li>Buttons reparation (turn on button, volume button and home button)</li>
                <li>Microphones.</li>
                <li>Broken/damaged screen reparation</li>
                <li>Change of spare parts (Buzzers,generic screens, touch screens, bateries, etc)</li>
            </ul>
        </p>
    </div>
    <div class="container bg-dark" id="parrafo3">
        <h2 style="text-align: center;">Software</h2>
        <p>
            <ul>
                <li>Company release</li>
                <li>Unlock patterns</li>
                <li>FRP unlock</li>
                <li>Signal reparation</li>
                <li>Boot partition reparation (For devices that doesn't load OS)</li>
                <li>"Software load"</li>
            </ul>
        </p>
    </div>
    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            include('includes/eng_footer.php');
        ?>
    </footer>
                                                    <!--js script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>