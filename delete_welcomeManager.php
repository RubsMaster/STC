<?php
    include('config.php');

    $aidi = $_POST['delId'];

    $sql = "DELETE FROM `ordenes` WHERE id_orden = '$aidi'";
    $resul = mysqli_query($con,$sql);
    header('location: welcome.php');
?>