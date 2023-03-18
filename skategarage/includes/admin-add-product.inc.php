<?php

if (isset($_POST["submitAddProduct"])) {
    
    $addProductName = $_POST["addProductName"];
    $addProductCategory = $_POST["addProductCategory"];
    $addProductPrice = $_POST["addProductPrice"];
    $addProductQuantity = $_POST["addProductQuantity"];
    $addProductDescription = $_POST["addProductDescription"];
    $addProductColor = $_POST["addProductColor"];
    $addProductSize = $_POST["addProductSize"];
    $addProductImage = $_FILES["addProductImage"]["name"];
    $temporaryProductImage = $_FILES["addProductImage"]["tmp_name"];

    require_once 'database.inc.php';
    require_once 'functions.inc.php';

    if (adminEmptyInputAddProduct($addProductName, $addProductCategory, $addProductPrice, $addProductQuantity, $addProductDescription, $addProductColor, $addProductSize) !== false) {

        header("location: ../admin-products.php?error=adminemptyinputaddproduct");
        exit();
    }

    if (adminCheckProductPrice($addProductPrice) !== false) {

        header("location: ../admin-products.php?error=admincheckproductprice");
        exit();
    }

    adminAddProduct($conn, $addProductName, $addProductCategory, $addProductPrice, $addProductQuantity, $addProductDescription, $addProductColor, $addProductSize, $addProductImage, $temporaryProductImage);
} 

else {

    header("location: ../admin-products.php");
    exit();
}