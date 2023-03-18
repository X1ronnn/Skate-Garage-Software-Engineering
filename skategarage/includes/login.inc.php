<?php

if (isset($_POST["submit"])) {

    $userUsername = $_POST["userUsername"];
    $userPassword = $_POST["userPassword"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($userUsername, $userPassword) !== false) {

        header("location: ../index.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $userUsername, $userPassword);
}

else {

    header("location: ../index.php");
    exit();
}