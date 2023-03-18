<?php

if (isset($_POST["submit"])) {
    
    $userEmail = $_POST["userEmail"];
    $userPassword = $_POST["userPassword"];
    $userPasswordRepeat = $_POST["userPasswordRepeat"];
    $userUsername = $_POST["userUsername"];
    $userFirstName = $_POST["userFirstName"];
    $userMiddleName = $_POST["userMiddleName"];
    $userLastName = $_POST["userLastName"];
    $userContactNo = $_POST["userContactNo"];
    $userAddress = $_POST["userAddress"];
    $userZipCode = $_POST["userZipCode"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignUp($userEmail, $userPassword, $userUsername, $userFirstName, $userMiddleName, $userLastName, $userContactNo, $userAddress, $userZipCode) !== false) {

        header("location: ../signup.php?error=emptyinput");
        exit();
    }

    if (invalidUsername($userUsername) !== false) {

        header("location: ../signup.php?error=invalidusername");
        exit();
    }

    if (invalidEmail($userEmail) !== false) {

        header("location: ../signup.php?error=invalidemail");
        exit();
    }

    if (passwordMatch($userPassword, $userPasswordRepeat) !== false) {

        header("location: ../signup.php?error=passwordnotmatch");
        exit();
    }

    if (usernameExists($conn, $userUsername, $userEmail) !== false) {

        header("location: ../signup.php?error=usernametaken");
        exit(); 
    }

    createUser($conn, $userEmail, $userPassword, $userUsername, $userFirstName, $userMiddleName, $userLastName, $userContactNo, $userAddress, $userZipCode);
} 

else {

    header("location: ../signup.php");
    exit();
}