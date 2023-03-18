<?php
    include_once 'includes/admin-header.inc.php';
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

                <div class="container-fluid px-5">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-5 shadow-sm d-flex justify-content-around align-items-center rounded-4 products-card">
                                <div>
                                    <h3 class="fs-2 text-white">Products</h3>
                                    <p class="text-white">Total Products: 720</p>
                                    <button type="button" class="btn btn-dark me-3 rounded-5">View Products</button>
                                </div>
                                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3 text-white"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-4 sales-card">
                                <div>
                                    <h3 class="fs-2 text-white">Sales</h3>
                                    <p class="text-white">4920</p>
                                    <button type="button" class="btn btn-dark me-3 rounded-5">View Sales</button>
                                </div>
                                <i class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3 text-white"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-4 delivery-card">
                                <div>
                                    <h3 class="fs-2 text-white">Deliveries</h3>
                                    <p class="text-white">3899</p>
                                    <button type="button" class="btn btn-dark me-3 rounded-5">View Deliveries</button>
                                </div>
                                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3 text-white"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-5 bg-white shadow-sm d-flex justify-content-around align-items-center rounded-4 increase-card">
                                <div>
                                    <h3 class="fs-2 text-white">Increase</h3>
                                    <p class="text-white">%25</p>
                                    <button type="button" class="btn btn-dark me-3 rounded-5">View Analytics</button>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3 text-white"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="col my-5">
                            <div class="p-4 bg-white shadow-sm rounded-4">
                                <h2 class="fs-4 mb-3">Order List</h2>
                                <table class="table bg-white rounded shadow-sm table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="50">#</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Customer</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Television</td>
                                            <td>Jonny</td>
                                            <td>$1200</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Laptop</td>
                                            <td>Kenny</td>
                                            <td>$750</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Cell Phone</td>
                                            <td>Balls</td>
                                            <td>$600</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Fridge</td>
                                            <td>Killy</td>
                                            <td>$300</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Books</td>
                                            <td>Filly</td>
                                            <td>$120</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Gold</td>
                                            <td>Bumbo</td>
                                            <td>$1800</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Pen</td>
                                            <td>Bilbo</td>
                                            <td>$75</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Notebook</td>
                                            <td>Frodo</td>
                                            <td>$36</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Dress</td>
                                            <td>Kimo</td>
                                            <td>$255</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">10</th>
                                            <td>Paint</td>
                                            <td>Zico</td>
                                            <td>$434</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">11</th>
                                            <td>Carpet</td>
                                            <td>Jeco</td>
                                            <td>$1236</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">12</th>
                                            <td>Food</td>
                                            <td>Haso</td>
                                            <td>$422</td>
                                        </tr>
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