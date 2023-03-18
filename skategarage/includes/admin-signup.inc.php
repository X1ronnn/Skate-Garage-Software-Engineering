<?php

if (isset($_POST["submit"])) {
    
    $adminPassword = $_POST["adminPassword"];
    $adminPasswordRepeat = $_POST["adminPasswordRepeat"];
    $adminUsername = $_POST["adminUsername"];
    $adminFirstName = $_POST["adminFirstName"];
    $adminMiddleName = $_POST["adminMiddleName"];
    $adminLastName = $_POST["adminLastName"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (adminEmptyInputSignUp($adminPassword, $adminUsername, $adminFirstName, $adminMiddleName, $adminLastName) !== false) {

        header("location: ../admin-signup.php?error=adminemptyinput");
        exit();
    }

    if (adminInvalidUsername($adminUsername) !== false) {

        header("location: ../admin-signup.php?error=admininvalidusername");
        exit();
    }

    if (adminPasswordMatch($adminPassword, $adminPasswordRepeat) !== false) {

        header("location: ../admin-signup.php?error=adminpasswordnotmatch");
        exit();
    }

    if (adminUsernameExists($conn, $adminUsername) !== false) {

        header("location: ../admin-signup.php?error=adminusernametaken");
        exit(); 
    }

    adminCreateUser($conn, $adminPassword, $adminUsername, $adminFirstName, $adminMiddleName, $adminLastName);
} 

else {

    header("location: ../admin-signup.php");
    exit();
}