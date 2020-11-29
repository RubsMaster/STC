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
    <title>Quote</title>
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
        include('includes/eng_header.php');
        ?>
    </header>
    <div class="container" style="padding-top: 20px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <header class="card-header">
                        <center>
                            <h4 class="card-title mt-2">Quote price</h4>
                        </center>
                    </header>
                    <article class="card-body">
                        <form action="quoteManager.php" method="POST">
                            <!-- Dropdown lists inicio-->
                            <div class="form-row">
                                <!-- Dropdown list Modelo -->
                                <div class="form-group col-md-6">
                                    <label>Model</label>
                                    <select name="modelo" class="form-control">
                                        <option selected=""> Select...</option>
                                        <option value="6"> iPhone 6</option>
                                        <option value="6s"> iPhone 6s</option>
                                        <option value="6+"> iPhone 6 Plus</option>
                                        <option value="6s+"> iPhone 6s Plus</option>
                                        <option value="7"> iPhone 7</option>
                                        <option value="7+"> iPhone 7 Plus</option>
                                        <option value="8"> iPhone 8</option>
                                        <option value="8+"> iPhone 8 Plus</option>
                                        <option value="x"> iPhone X</option>
                                        <option value="xr"> iPhone XR</option>
                                        <option value="xsmax"> iPhone XS Max</option>
                                    </select>
                                </div>
                                <!-- Dropdown list Reparacion -->
                                <div class="form-group col-md-6">
                                    <label>Repair</label>
                                    <select name="reparacion" class="form-control">
                                        <option selected=""> Select...</option>
                                        <option value="pantallas"> Display</option>
                                        <option value="baterias"> Batery</option>
                                    </select>
                                </div>                                
                            </div>
                        </form>
                        <button type="button" name="cotizar" class="btn btn-secondary btn-lg col-md-12">Quote</button>
                    </article>    
                </div>
            </div>
            
        </div>
        
    </div>
    <footer class='page-footer font-small bg-dark pt-4'>
        <?php
            include('includes/eng_footer.php');
        ?>
    </footer>
</body>
</html>