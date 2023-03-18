<?php

if (isset($_POST["submit"])) {

    $adminUsername = $_POST["adminUsername"];
    $adminPassword = $_POST["adminPassword"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (adminEmptyInputLogin($adminUsername, $adminPassword) !== false) {

        header("location: ../admin-login.php?error=adminemptyinput");
        exit();
    }

    adminLoginUser($conn, $adminUsername, $adminPassword);
}

else {

    header("location: ../admin-dashboard.php");
    exit();
}