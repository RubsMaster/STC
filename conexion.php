<?php

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','test_updateprod');

$con=@mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
if(!$con){
    die("imposible conectarse: ".mysqli_error($con));
}
if(@mysqli_connect_errno()){
    die("Conexion falló: ".mysqli_connect_errno()." : ".mysqli_connect_error());
}

?>