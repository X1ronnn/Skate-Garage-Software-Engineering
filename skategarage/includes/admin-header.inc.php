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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex" id="wrapper">
        
            <!-- Sidebar -->
            <div class="bg-light" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                    <i class="fa-solid fa-person-skating me-2 icon"></i>Sk8 Garage
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-center">
                            <img src="img/Xiron.png" alt="Profile Picture" class="profile-picture-admin me-3 mt-3 mb-3">
                            <?php
                                if (isset($_SESSION["adminUsername"])) {

                                    echo '<p class="text-black mt-3">';
                                    echo $_SESSION["adminUsername"];
                                    echo '</p>';
                                }

                                else {

                                    echo '<p class="text-black mt-3">No User</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <p class="text-muted text-center profile-title">Lead Developer</p>       
                </div>

                <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>

                <div class="list-group list-group-flush my-3">
                    <a href="admin-dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text <?= ($activePage == 'admin-dashboard') ? 'active':''; ?>">
                        <i class="fas fa-tachometer-alt me-3 icon"></i>Dashboard
                    </a>
                    <a href="admin-products.php" class="list-group-item list-group-item-action bg-transparent second-text <?= ($activePage == 'admin-products') ? 'active':''; ?>">
                        <i class="fas fa-solid fa-gift me-3 icon"></i>Products
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text">
                        <i class="fas fa-solid fa-chart-gantt me-3 icon"></i>Categories
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text">
                        <i class="fas fa-solid fa-chart-line me-3 icon"></i>Analytics
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text">
                        <i class="fas fa-solid fa-shopping-cart me-3 icon"></i>Website Banners
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text">
                        <i class="fas fa-solid fa-heart me-3 icon"></i>Top Products
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-transparent second-text">
                        <i class="fas fa-solid fa-truck-fast me-3 icon"></i>Orders
                    </a>
                    <a href="includes/admin-logout.inc.php" class="list-group-item list-group-item-action bg-transparent text-danger">
                        <i class="fas fa-solid fa-power-off me-3"></i>Logout
                    </a>
                    </li>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->