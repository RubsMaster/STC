<nav class="navbar navbar-expand-lg navbar-dark bg-dark align-items-center">
    <a class="navbar-brand" href="eng_home.php"><img src="img/STC.png" class="logo-empresa" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="eng_home.php" id="navInicio">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="eng_about.php">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="eng_quote.php">Quote</a>
                    <a class="dropdown-item" href="#">Repair Tracking</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                    data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">User: <?php echo htmlspecialchars($_SESSION["username"]); ?></b></a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php">Log In</a>
                    <a class="dropdown-item" href="register.php">Sign Up</a>
                    <a class="dropdown-item" href="logOut.php">Log Out</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="home.php">Spanish</a>
            </li>
        </ul>
    </div>
</nav>