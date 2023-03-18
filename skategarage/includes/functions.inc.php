<?php

// Customer Functions

// Customer Sign Up Empty Input
function emptyInputSignUp($userEmail, $userPassword, $userUsername, $userFirstName, $userMiddleName, $userLastName, $userContactNo, $userAddress, $userZipCode) {

    $result;

    if (empty($userEmail) || empty($userPassword) || empty($userUsername) || empty($userFirstName) || empty($userMiddleName) || empty($userLastName) || empty($userContactNo) || empty($userAddress) || empty($userZipCode)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Customer Invalid Username
function invalidUsername($userUsername) {

    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $userUsername)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Customer Invalid Email
function invalidEmail($userEmail) {

    $result;

    if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Customer Password Not Match
function passwordMatch($userPassword, $userRepeatPassword) {

    $result;

    if ($userPassword !== $userRepeatPassword) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Customer Username Already Exists
function usernameExists($conn, $userUsername, $userEmail) {

    $sql = "SELECT * FROM users WHERE userUsername = ? OR userEmail = ?;";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {

        header("location: ../signup.php?error=statementfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($statement, "ss", $userUsername, $userEmail);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)) {

        return $row;
    }

    else {

        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}

// Customer Create New Customer Account
function createUser($conn, $userEmail, $userPassword, $userUsername, $userFirstName, $userMiddleName, $userLastName, $userContactNo, $userAddress, $userZipCode) {

    $sql = "INSERT INTO users (userFirstName, userMiddleName, userLastName, userContactNo, userAddress, userZipCode, userUsername, userEmail, userPassword) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {

        header("location: ../signup.php?error=statementfailed");
        exit(); 
    }

    $hashedPassword = password_hash($userPassword, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "sssssssss", $userFirstName, $userMiddleName, $userLastName, $userContactNo, $userAddress, $userZipCode, $userUsername, $userEmail, $hashedPassword);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../signup.php?error=none");
    exit();
}

// Customer Log In Empty Input
function emptyInputLogin($userUsername, $userPassword) {

    $result;

    if (empty($userUsername) || empty($userPassword)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Customer Log In
function loginUser($conn, $userUsername, $userPassword) {

    $usernameExists = usernameExists($conn, $userUsername, $userUsername);

    if ($UsernameExists === false) {

        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $passwordHashed = $usernameExists["userPassword"];
    $checkPassword = password_verify($userPassword, $passwordHashed);

    if ($checkPassword === false) {

        header("location: ../login.php?error=wronglogin");
        exit();
    }

    else if ($checkPassword === true) {

        session_start();

        $_SESSION["userId"] = $usernameExists["userId"];
        $_SESSION["userUsername"] = $usernameExists["userUsername"];
        header("location: ../index.php");
        exit();
    }
}

//================================================

// Admin Functions

// Admin Sign Up Empty Input
function adminEmptyInputSignUp($adminPassword, $adminUsername, $adminFirstName, $adminMiddleName, $adminLastName) {

    $result;

    if (empty($adminPassword) || empty($adminUsername) || empty($adminFirstName) || empty($adminMiddleName) || empty($adminLastName)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Admin Invalid Usernmae
function adminInvalidUsername($adminUsername) {

    $result;

    if (!preg_match("/^[a-zA-Z0-9]*$/", $adminUsername)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Admin Password Not Match
function adminPasswordMatch($adminPassword, $adminRepeatPassword) {

    $result;

    if ($adminPassword !== $adminRepeatPassword) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Admin Username Already Exists
function adminUsernameExists($conn, $adminUsername) {

    $sql = "SELECT * FROM admins WHERE adminUsername = ?;";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {

        header("location: ../admin-signup.php?error=adminstatementfailed");
        exit(); 
    }

    mysqli_stmt_bind_param($statement, "s", $adminUsername);
    mysqli_stmt_execute($statement);

    $resultData = mysqli_stmt_get_result($statement);

    if ($row = mysqli_fetch_assoc($resultData)) {

        return $row;
    }

    else {

        $result = false;
        return $result;
    }

    mysqli_stmt_close($statement);
}

// Admin Create New Admin Account
function adminCreateUser($conn, $adminPassword, $adminUsername, $adminFirstName, $adminMiddleName, $adminLastName) {

    $sql = "INSERT INTO admins (adminFirstName, adminMiddleName, adminLastName, adminUsername, adminPassword) VALUES (?, ?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {

        header("location: ../admin-signup.php?error=adminstatementfailed");
        exit(); 
    }

    $hashedPassword = password_hash($adminPassword, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($statement, "sssss", $adminFirstName, $adminMiddleName, $adminLastName, $adminUsername, $hashedPassword);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../admin-signup.php?error=adminnone");
    exit();
}

// Admin Log In Empty Input
function adminEmptyInputLogin($adminUsername, $adminPassword) {

    $result;

    if (empty($adminUsername) || empty($adminPassword)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Admin Log In
function adminLoginUser($conn, $adminUsername, $adminPassword) {

    $adminUsernameExists = adminUsernameExists($conn, $adminUsername);

    if ($adminUsernameExists === false) {

        header("location: ../admin-login.php?error=adminwronglogin");
        exit();
    }

    $passwordHashed = $adminUsernameExists["adminPassword"];
    $checkPassword = password_verify($adminPassword, $passwordHashed);

    if ($checkPassword === false) {

        header("location: ../admin-login.php?error=adminwronglogin");
        exit();
    }

    else if ($checkPassword === true) {

        session_start();

        $_SESSION["adminId"] = $adminUsernameExists["adminId"];
        $_SESSION["adminUsername"] = $adminUsernameExists["adminUsername"];
        header("location: ../admin-dashboard.php");
        exit();
    }
}

// Admin Add Product

// Admin Add Product Empty Input
function adminEmptyInputAddProduct($addProductName, $addProductCategory, $addProductPrice, $addProductQuantity, $addProductDescription, $addProductColor, $addProductSize) {

    $result;

    if (empty($addProductName) || empty($addProductCategory) || empty($addProductPrice) || empty($addProductQuantity) || empty($addProductDescription) || empty($addProductColor) || empty($addProductSize)) {

        $result = true;
    }

    else {

        $result = false;
    }

    return $result;
}

// Admin Check Product Price
function adminCheckProductPrice($addProductPrice) {

    $result;

    if ($addProductPrice <= 0) {

        $result = true;
    }

    else {
       
        $result = false;
    }

    return $result;
}

// Admin Add Product
function adminAddProduct($conn, $addProductName, $addProductCategory, $addProductPrice, $addProductQuantity, $addProductDescription, $addProductColor, $addProductSize, $addProductImage, $temporaryProductImage) {

    $sql = "INSERT INTO products (productName, productCode, productCategory, productPrice, productQuantity, productDescription, productColor, productSize, productImage) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $statement = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($statement, $sql)) {

        header("location: ../admin-products.php?error=adminstatementfailed");
        exit(); 
    }

    $checkProductRows = "SELECT * FROM products";

    if ($result = mysqli_query($conn, $checkProductRows)) {

        $rowcount = mysqli_num_rows($result);

        mysqli_free_result($result);
    }

    $generatedNumber = $rowcount + 1;

    $generatedProductCode = "";

    if ($addProductCategory === "Skateboard") {
        
        $generatedProductCode = "SKT" . "-" . $generatedNumber . "-" . $addProductColor;
    }

    else if ($addProductCategory === "Helmet") {

        $generatedProductCode = "HMT" . "-" . $generatedNumber . "-" . $addProductColor;
    }

    else if ($addProductCategory === "Accessories") {

        $generatedProductCode = "ACR" . "-" . $generatedNumber . "-" . $addProductColor;
    }

    else if ($addProductCategory === "Tool") {

        $generatedProductCode = "TOL" . "-" . $generatedNumber . "-" . $addProductColor;
    }

    $uploadedFile = "product-images/" . $addProductImage;
    $fileLocation = "../product-images/" . $addProductImage;
    move_uploaded_file($temporaryProductImage, $fileLocation);

    mysqli_stmt_bind_param($statement, "sssssssss", $addProductName, $generatedProductCode, $addProductCategory, $addProductPrice, $addProductQuantity, $addProductDescription, $addProductColor, $addProductSize, $uploadedFile);
    mysqli_stmt_execute($statement);
    mysqli_stmt_close($statement);

    header("location: ../admin-products.php?productadded");
    exit();
}

// Admin Remove Product

//================================================