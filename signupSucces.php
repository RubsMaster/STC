<?php
require_once('connect.php');


$name = "";
$lastname = "";
$email = "";
$state = "";
$city = "";
$pass1 = "";

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pass1 = $_POST['pass1'];

    $campos = array();

    if ($name == "") {
        array_push($campos, "El campo Nombre no puede estar vacio");
    }

    if ($lastname == "") {
        array_push($campos, "El campo Apellido no puede estar vacio");
    }

    if ($email == "" || strpos($email, "@") === false) {
        array_push($campos, "Ingresa un Email valido");
    }

    if ($state == "") {
        array_push($campos, "Selecciona un Estado");
    }

    if ($city == "") {
        array_push($campos, "El campo Ciudad no puede estar vacio");
    }

    if ($pass1 == "" || strlen($pass1) < 6) {
        array_push($campos, "El campo Contraseña no puede estar vacio, ni tener menos de 6 caracteres");
    }


    if (count($campos) > 0) {
        echo "<div class='alert alert-warning'>";
        for ($i = 0; $i < count($campos); $i++) {
            echo "<li>" . $campos[$i] . "</i>";
        }
    } else {
        $sql = "INSERT INTO usuarios(name, lastname, email, state, city, pass1 )
                                                    VALUES ('$name', '$lastname', '$email', '$state', '$city', '$pass1')";

        if ($conexion->query($sql) === true) {

        } else {
            die("Error al insertar los datos" . $conexion->error);
        }



        echo "<div class='alert alert-success'>
                                                Registro exitoso!";
        header('Location: signUp.php');

    }
    echo "</div>";


}

?>