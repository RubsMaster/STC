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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

body{
    font: 14px sans-serif;
    text-align: center;
}

</style>
</head>
<body>
    <div class = "container">
        <div class = "page-header"> 
            <h1>Hola, <b>
                <?php echo htmlspecialchars($_SESSION["username"]); ?>
            </b>. Bienvenid@ a nuestra tienda </h1>
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Administrar <b>Productos</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#addProductModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo producto</span></a>
                    </div>
                </div>
            </div>
            <div class='col-sm-4 pull-right'>
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="Buscar" id="q" onkeyup="load(1);" />
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button" onclick="load(1);">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
            <div class='clearfix'></div>
            <hr>
            <div id="loader"></div><!-- Carga de datos ajax aqui -->
            <div id="resultados"></div><!-- Carga de datos ajax aqui -->
            <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <?php include("html/modal_add.php");?>
    <!-- Edit Modal HTML -->
    <?php include("html/modal_edit.php");?>
    <!-- Delete Modal HTML -->
    <?php include("html/modal_delete.php");?>
    <script src="js/script.js"></script>
        <p>
            <a class="btn btn-danger" href="logout.php">salir</a>
        </p>
    </div>
</body>


</html>