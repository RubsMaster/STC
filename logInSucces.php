<<<<<<< HEAD
<?php
session_start();

require_once 'connect.php';

$email = $_POST['user'];
$pass1 = $_POST['pass1'];

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' AND pass1 = '$pass1'");
if (!$query) {
    header("location: index.php");
    echo mysqli_error($mysqli);
}

if ($email = mysqli_fetch_assoc($query)) {
    header("location: home.php");
} else {
    header("location: index.php");
}


=======
<?php
session_start();

require_once 'connect.php';

$email = $_POST['user'];
$pass1 = $_POST['pass1'];

$query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE email = '$email' AND pass1 = '$pass1'");
if (!$query) {
    header("location: index.php");
    echo mysqli_error($mysqli);
}

if ($email = mysqli_fetch_assoc($query)) {
    header("location: home.php");
} else {
    header("location: index.php");
}


>>>>>>> feature/register
?>