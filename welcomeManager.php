<?php
    include('config.php');

    $id=$_POST['aidi'];
    $status=$_POST['status'];

    if($_POST['status'] == "Pendiente"){
        $sql = "UPDATE `ordenes` SET `estado`= 'Pendiente' WHERE id_orden = '$id'";
        $resul=mysqli_query($con,$sql);
        header('location: welcome.php');
    } else if($_POST['status'] == "En proceso"){
        $sql="UPDATE ordenes SET estado = 'En proceso' WHERE id_orden = '$id'";
        $resul=mysqli_query($con,$sql);
        header('location: welcome.php');
    }else if($_POST['status'] == "Listo para la entrega"){
        $sql="UPDATE ordenes SET estado = 'Listo para la entrega' WHERE id_orden = '$id'";
        $resul=mysqli_query($con,$sql);
        header('location: welcome.php');
    }

   /* $sql="UPDATE ordenes SET estado = '$status'";
    $resul=mysqli_query($con,$sql);
    echo $resul['estado'];*/
?>