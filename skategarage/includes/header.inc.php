<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sk8Garage - Homepage</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    
    <body class="body-color">
        <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm p-3 mb-5 rounded-bottom-1">
            <div class="container padding-1">
                <a class="navbar-brand" href="admin-login.php">
                <img src="img/shop_logo.png" class="navbar-logo" alt="..." height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline">
                        <div class="row">
                            <div class="col">
                            <input class="form-control mr-sm-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
                            </div>
                            <div class="col">
                            <button class="btn btn-primary text-white my-2 my-sm-0 rounded-5 ml-5" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'index') ? 'active':''; ?>" aria-current="page" href="index.php">Homepage</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'categories') ? 'active':''; ?>" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link <?= ($activePage == 'products') ? 'active':''; ?>" href="#">Products</a>
                    </li>
                    <?php
                        if (isset($_SESSION["userUsername"])) {

                            if ($activePage == 'myprofile') {

                                echo '<li class="nav-item">
                                <a class="nav-link active" href="#">My Account</a>
                                </li>';
                            }

                            else {

                                echo '<li class="nav-item">
                                <a class="nav-link" href="#">My Account</a>
                                </li>';                           
                            }

                            if ($activePage == 'logout') {

                                echo '<li class="nav-item active">
                                <a class="nav-link" href="includes/logout.inc.php">Log Out</a>
                                </li>';
                            }

                            else {

                                echo '<li class="nav-item">
                                <a class="nav-link" href="includes/logout.inc.php">Log Out</a>
                                </li>';                          
                            }

                            // echo '<li class="nav-item">
                            // <a class="nav-link" href="#">My Account</a>
                            // </li>';

                            // echo '<li class="nav-item">
                            // <a class="nav-link" href="includes/logout.inc.php">Log Out</a>
                            // </li>';
                        }

                        else {

                            if ($activePage == 'signup') {

                                echo '<li class="nav-item">
                                <a class="nav-link active" href="signup.php">Sign Up</a>
                                </li>';
                            }

                            else {

                                echo '<li class="nav-item">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                                </li>';                         
                            }

                            if ($activePage == 'login') {

                                echo '<li class="nav-item">
                                <a class="nav-link active" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Log In</a>
                                </li>';
                            }

                            else {

                                echo '<li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Log In</a>
                                </li>';                      
                            }

                            // echo '<li class="nav-item">
                            // <a class="nav-link" href="signup.php">Sign Up</a>
                            // </li>';

                            // echo '<li class="nav-item">
                            // <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Log In</a>
                            // </li>';
                        }
                    ?>
                    <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                        <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li> -->
                </ul>
                </div>
            </div>
        </nav>