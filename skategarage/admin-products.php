<?php
    include_once 'includes/admin-header.inc.php';
    include_once 'includes/database.inc.php';
?>

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4 admin-navbar">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-align-left fs-4 me-3 icon" id="menu-toggle"></i>
                        <h2 class="fs-2 m-0">Dashboard</h2>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>

                <?php
                                        
                    $sql = "SELECT * FROM products";
                    $result = mysqli_query($conn, $sql);

                    $sqlTwo = "SELECT * FROM products";
                    $resultTwo = mysqli_query($conn, $sqlTwo);
                ?>

                <?php
                
                if (mysqli_num_rows($resultTwo) > 0) {

                    $productNumber = 0;

                    while ($test = mysqli_fetch_assoc($resultTwo)) {
                    
                        $productNumber++;
                    }
                }
                ?>

                <div class="container-fluid px-5">
                    <div class="row g-3">
                        <div class="col-lg-6 pt-4">
                            <div class="p-5 bg-white shadow-sm rounded-4 products-card">
                                <h3 class="fs-2 mb-3 text-white">Products</h3>

                                <p class="text-white">Total Products: <?php echo $productNumber; ?></p>
                                <div class="row  bg-transparent">
                                    <div class="row-sm-1 bg-transparent">

                                        <!-- Button Add Product for Modal -->
                                        <button type="button" class="btn btn-dark me-3 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Product</button>

                                        <!-- Add Product Modal -->
                                        <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content rounded-5">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body bg-light">
                                                    <form action="includes/admin-add-product.inc.php" method="post" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="product-name" class="col-form-label">Product Name:</label>
                                                            <input type="text" name="addProductName" class="form-control mb-3" id="product-name">

                                                            <label for="product-category" class="col-form-label">Category:</label>
                                                            <!-- <input type="text" name="addProductCategory" class="form-control mb-3" id="product-category"> -->

                                                            <select class="form-select mb-3" id="product-category" name="addProductCategory">
                                                                <option value="Skateboard">Skateboard</option>
                                                                <option value="Helmet">Helmet</option>
                                                                <option value="Accessories">Accessories</option>
                                                                <option value="Tool">Tool</option>
                                                            </select>

                                                            <label for="product-price" class="col-form-label">Price:</label>
                                                            <input type="text" name="addProductPrice" class="form-control mb-3" id="product-price">

                                                            <label for="product-quantity" class="col-form-label">Quantity:</label>
                                                            <input type="number" name="addProductQuantity" class="form-control mb-3" id="product-quantity">

                                                            <label for="product-description" class="col-form-label">Description:</label>
                                                            <textarea name="addProductDescription" class="form-control mb-3" id="product-description"></textarea>

                                                            <label for="product-color" class="col-form-label">Color(s):</label>
                                                            <input type="text" name="addProductColor" class="form-control mb-3" id="product-color">

                                                            <label for="product-size" class="col-form-label">Size:</label>
                                                            <input type="text" name="addProductSize" class="form-control mb-3" id="product-size">

                                                            <label for="product-image" class="col-form-label">Image</label>
                                                            <input type="file" name="addProductImage" class="form-control mb-3" id="product-image" required>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-center">
                                                            <button type="submit" name="submitAddProduct" class="btn btn-light rounded-5 button-purple text-white">Add Product</button>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-center">
                                                        <?php
                                                            if (isset($_GET["error"])) {

                                                                if ($_GET["error"] == "adminemptyinputaddproduct") {

                                                                    echo "<p class='mt-3'>Fill in all fields!</p>";
                                                                }

                                                                else if ($_GET["error"] == "admincheckproductprice") {

                                                                    echo "<p class='mt-3'>Product price must be not less than 0!</p>";
                                                                }
                                                            }
                                                        ?>
                                                        </div>
                                                        <!-- <div class="mb-3 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-light rounded-5 button-purple text-white">Add Product</button>
                                                        </div> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- View Product Modal -->
                                        <div class="modal fade" id="viewProductModal" tabindex="-1" aria-labelledby="viewProductModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content rounded-5">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="viewProductModalLabel">View Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body bg-light">
                                                    <form action="" method="post" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="product-name" class="col-form-label">Product Name:</label>
                                                            <input type="text" name="viewProductName" class="form-control mb-3" id="product-name">

                                                            <label for="product-category" class="col-form-label">Category:</label>
                                                            <!-- <input type="text" name="addProductCategory" class="form-control mb-3" id="product-category"> -->

                                                            <select class="form-select mb-3" id="product-category" name="viewProductCategory">
                                                                <option value="Skateboard">Skateboard</option>
                                                                <option value="Helmet">Helmet</option>
                                                                <option value="Accessories">Accessories</option>
                                                                <option value="Tool">Tool</option>
                                                            </select>

                                                            <label for="product-price" class="col-form-label">Price:</label>
                                                            <input type="text" name="viewProductPrice" class="form-control mb-3" id="product-price">

                                                            <label for="product-quantity" class="col-form-label">Quantity:</label>
                                                            <input type="number" name="viewProductQuantity" class="form-control mb-3" id="product-quantity">

                                                            <label for="product-description" class="col-form-label">Description:</label>
                                                            <textarea name="viewProductDescription" class="form-control mb-3" id="product-description"></textarea>

                                                            <label for="product-color" class="col-form-label">Color(s):</label>
                                                            <input type="text" name="viewProductColor" class="form-control mb-3" id="product-color">

                                                            <label for="product-size" class="col-form-label">Size:</label>
                                                            <input type="text" name="viewProductSize" class="form-control mb-3" id="product-size">

                                                            <label for="product-image" class="col-form-label">Image</label>
                                                            <input type="file" name="viewProductImage" class="form-control mb-3" id="product-image" required>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Edit Product Modal -->
                                        <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content rounded-5">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body bg-light">
                                                    <form action="includes/admin-add-product.inc.php" method="post" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <label for="product-name" class="col-form-label">Product Name:</label>
                                                            <input type="text" name="editProductName" class="form-control mb-3" id="product-name">

                                                            <label for="product-category" class="col-form-label">Category:</label>
                                                            <!-- <input type="text" name="addProductCategory" class="form-control mb-3" id="product-category"> -->

                                                            <select class="form-select mb-3" id="product-category" name="editProductCategory">
                                                                <option value="Skateboard">Skateboard</option>
                                                                <option value="Helmet">Helmet</option>
                                                                <option value="Accessories">Accessories</option>
                                                                <option value="Tool">Tool</option>
                                                            </select>

                                                            <label for="product-price" class="col-form-label">Price:</label>
                                                            <input type="text" name="editProductPrice" class="form-control mb-3" id="product-price">

                                                            <label for="product-quantity" class="col-form-label">Quantity:</label>
                                                            <input type="number" name="editProductQuantity" class="form-control mb-3" id="product-quantity">

                                                            <label for="product-description" class="col-form-label">Description:</label>
                                                            <textarea name="editProductDescription" class="form-control mb-3" id="product-description"></textarea>

                                                            <label for="product-color" class="col-form-label">Color(s):</label>
                                                            <input type="text" name="editProductColor" class="form-control mb-3" id="product-color">

                                                            <label for="product-size" class="col-form-label">Size:</label>
                                                            <input type="text" name="editProductSize" class="form-control mb-3" id="product-size">

                                                            <label for="product-image" class="col-form-label">Image</label>
                                                            <input type="file" name="editProductImage" class="form-control mb-3" id="product-image" required>
                                                        </div>
                                                        <div class="mb-3 d-flex justify-content-center">
                                                            <button type="submit" name="submitEditProduct" class="btn btn-light rounded-5 button-purple text-white">Update Product</button>
                                                        </div>
                                                        <!-- <div class="mb-3 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-light rounded-5 button-purple text-white">Add Product</button>
                                                        </div> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Product Modal -->
                                        <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-md">
                                                <div class="modal-content rounded-5">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteProductModalLabel">Delete Product</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body bg-light">
                                                    <form action="includes/admin-add-product.inc.php" method="post" enctype="multipart/form-data">
                                                        <div class="mb-3">
                                                            <p class='mt-3'>Are you sure you want to delete this product?</p>
                                                        </div>
                                                        <!-- <div class="mb-3 d-flex justify-content-center">
                                                            <button type="button" class="btn btn-light rounded-5 button-purple text-white">Add Product</button>
                                                        </div> -->
                                                    </form>
                                                </div>
                                                <div class="modal-footer d-flex justify-content-center">
                                                    <button type="submit" name="submitDeleteProduct" class="btn btn-danger rounded-5  text-white mt-5">Delete Product</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger rounded-5">Remove Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 pt-4">
                            <div class="p-5 bg-white shadow-sm rounded-4 sales-card">
                                <h3 class="fs-2 mb-3 text-white">Inventory</h3>

                                <p class="text-white">Check the amount, quantity, and price.</p>
                                <div class="row  bg-transparent">
                                    <div class="row-sm-1 bg-transparent">
                                        <button type="button" class="btn btn-dark me-3 rounded-5">View Inventory</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="col my-5">
                            <div class="p-4 bg-white shadow-sm rounded-4">
                            </div>
                        </div>
                    </div>
                        
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="col my-5">
                            <div class="p-4 bg-white shadow-sm rounded-4">
                                <h2 class="fs-4 mb-3">Product List</h2>
                                <!-- <div class="input-group">
                                    <input type="search" class="form-control rounded-5" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                                    <button type="button" class="btn btn-primary rounded-5">Search</button>
                                </div>  -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="container mb-3">
                                            <div class="d-flex justify-content-start">
                                                <div class="searchbar">
                                                    <input class="search_input" type="text" name="" placeholder="Search...">
                                                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                                                </div> 
                                                <div class="d-flex justify-content-start align-items-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-light dropdown-toggle rounded-5 ms-4 button-purple text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Category
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="#">Skateboard</a>
                                                            <a class="dropdown-item" href="#">Helmet</a>
                                                            <a class="dropdown-item" href="#">Accessories</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-sm bg-white rounded shadow-sm table-hover align-middle">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50">#</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">Product Code</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Colors</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Product Image</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                            if (mysqli_num_rows($result) > 0) {

                                                $counter = 1;

                                                while ($data = mysqli_fetch_assoc($result)) {
                                        ?>

                                        <tr>
                                            <th scope="row"><?php echo $counter; ?></th>
                                            <td><?php echo $data["productName"]; ?></td>
                                            <td><?php echo $data["productCode"]; ?></td>
                                            <td><?php echo $data["productCategory"]; ?></td>
                                            <td>PHP <?php echo $data["productPrice"]; ?></td>
                                            <td><?php echo $data["productQuantity"]; ?></td>
                                            <td><?php echo $data["productDescription"]; ?></td>
                                            <td><?php echo $data["productColor"]; ?></td>
                                            <td><?php echo $data["productSize"]; ?></td>
                                            <td>
                                                <img class="rounded-3 border" height="100" width="100" src="<?php echo $data["productImage"]; ?>" alt="Product Image">
                                            </td>
                                            <td><a href="admin-products.php?viewproduct=<?php echo $data["productId"]; ?>" class="btn button-purple text-white me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#viewProductModal">View Details</a></td>
                                            <td><a href="admin-products.php?editproduct=<?php echo $data["productId"]; ?>" class="btn btn-dark me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#editProductModal">Edit</a></td>
                                            <td><a href="admin-products.php?deleteproduct=<?php echo $data["productId"]; ?>" class="btn btn-danger me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#deleteProductModal">Delete</a></td>
                                        </tr>

                                        <?php
                                        
                                            $counter++;
                                            
                                                }

                                            }
                                        ?>
                                        <!-- <tr>
                                            <th scope="row">2</th>
                                            <td>Skateboard Viper</td>
                                            <td>SKT01</td>
                                            <td>Skateboard</td>
                                            <td>PHP 100.00</td>
                                            <td>10</td>
                                            <td>
                                                <div class="col-lg-6 text-truncate">
                                                    <p class="text-truncate">Skateboard Viper is green and black.</p>
                                                </div>
                                            </td>
                                            <td>Green</td>
                                            <td>25 CM, 8 CM</td>
                                            <td>image</td>
                                            <td><button type="button" class="btn button-purple text-white me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">View Details</button></td>
                                            <td><button type="button" class="btn btn-dark me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">Delete</button></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Skateboard Viper</td>
                                            <td>SKT01</td>
                                            <td>Skateboard</td>
                                            <td>PHP 100.00</td>
                                            <td>10</td>
                                            <td>
                                                <div class="col-lg-6 text-truncate">
                                                    <p class="text-truncate">Skateboard Viper is green and black.</p>
                                                </div>
                                            </td>
                                            <td>Green</td>
                                            <td>25 CM, 8 CM</td>
                                            <td>image</td>
                                            <td><button type="button" class="btn button-purple text-white me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">View Details</button></td>
                                            <td><button type="button" class="btn btn-dark me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">Edit</button></td>
                                            <td><button type="button" class="btn btn-danger me-1 rounded-5" data-bs-toggle="modal" data-bs-target="#addProductModal">Delete</button></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>