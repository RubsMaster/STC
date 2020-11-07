<?php
    $con = mysqli_connect("localhost", "root", "root", "integradora");
    //Check connection
    if(mysqli_connect_errno()){
        echo "No se conecta alv:".mysqli_connect_errno();
    }
?>
