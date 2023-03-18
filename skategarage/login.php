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
    
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container padding-1">
                <a class="navbar-brand" href="#">
                <img src="img/shop_logo.png" class="navbar-logo" alt="..." height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline d-flex">
                        <input class="form-control mr-sm-2 rounded-5" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success my-2 my-sm-0 rounded-5" type="submit">Search</button>
                    </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Sign Up</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Log In</a>
                    </li>
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

        <div class="page-body">
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/banner-1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner-2.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/banner-3.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            <div class="container p-4 rounded-5 shadow p-3 mb-5 product-container">
                <div class="row rounded-5 m-2 text-black mb-4">
                    <h1 class="card-title text-white">Categories</h1>
                </div>
                
                <div class="row">
                    <div class="col d-flex justify-content-md-center">
                        <div class="card rounded-5 shadow-sm p-2 rounded product-card" style="width: 25rem;">
                            <img src="img/categories-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-white">Skateboards</h2>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="card rounded-5 shadow-sm p-2 rounded product-card" style="width: 25rem;">
                            <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-white">Accessories</h2>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center">
                        <div class="card rounded-5 shadow-sm p-2 rounded product-card" style="width: 25rem;">
                            <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-white">Tools</h2>
                                <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-4 rounded-5 shadow p-3 mb-5 rounded product-container">
                <div class="row rounded-5 m-2 text-white mb-3">
                    <h1 class="card-title text-white">Products</h1>
                </div>

                <div class="row d-flex justify-content-around align-items-between">
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2 product-card" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-white">Card title</h5>
                            <p class="card-text text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white button-green">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="text-center text-lg-start bg-dark text-white">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Connect with us:</span>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Left -->
                <!-- Right -->
                <div>
                
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->
            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3 text-secondary"></i>Skate Garage
                        </h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum
                            dolor sit amet, consectetur adipisicing elit.
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Skateboards</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Skateboard Parts</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Skateboard Gadgets</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Laravel</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Pricing</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Settings</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Orders</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Help</a>
                        </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">JANRA HandIT Solutions</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content bg-light rounded-5">
                <div class="modal-header mx-auto">
                    <h2 class="modal-title" id="exampleModalLongTitle">Log In</h2>
                </div>

                <div class="modal-body mx-auto">
                    <form>
                        <div class="form-group row align-items-center">
                            <div class="col-sm-10">
                                <div class="form-outline mb-4">
                                    <input type="email" id="form2Example1" class="form-control" placeholder="Email"/>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group row align-items-center">
                            <div class="col-sm-10">
                                <div class="form-outline mb-4">
                                    <input type="password" id="form2Example2" class="form-control" placeholder="Password"/>
                                </div>
                            </div>
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="col mx-auto">
                            <div class="col d-flex justify-content-center">
                                <button type="button" class="btn button-green text-white mb-4">Sign in</button>
                            </div>
                        </div>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#!">Register</a></p>
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f text-black"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google text-black"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-twitter text-black"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github text-black"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</html>