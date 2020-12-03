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
    <link rel="stylesheet" href="css/footerStyle.css">
</head>
<body>
    <header>
        <?php
            include('includes/header.php');
        ?>
    </header>

    <?php
        include('config.php');
    ?>
    <div class="container mb-3">
        <div class="card">        
            <div class="container">
                <form action="edit_welcomeManager.php" method="post">
                    <div class="container">
                        <label>ID a editar: </label>
                        <input type="text" name="aidi">
                    </div>
                <label>Modificar estado: </label>
                <select name="status" class="form-control">
                    <option value="Pendiente"""> Pendiente</option>
                    <option value="En proceso"> En proceso</option>
                    <option value="Listo para la entrega"> Listo para la entrega</option>
                </select>
                <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="card">
            <form action="delete_welcomeManager.php" method="post">
                <div class="container">
                    <label>ID a eliminar</label>
                    <input type="text" name="delId">
                    <input type="submit" value="Eliminar">
                </div>
            </form>
        </div>

    </div>
    

    <!-- Tabla -->
    <div class="container">
    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">ID Orden</th>
                <th scope="col">Usuario</th>
                <th scope="col">Email</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <?php
            $sql="SELECT * FROM ordenes";
            $result=mysqli_query($con,$sql);
            while($mostrar=mysqli_fetch_array($result)){
                ?>
            
        <tbody>
            <tr>
                <td><?php echo $mostrar['id_orden']?></th>
                <td><?php echo $mostrar['usuario']?></td>
                <td><?php echo $mostrar['email']?></td>
                <td><?php echo $mostrar['estado']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    
        
    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
                                            <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>