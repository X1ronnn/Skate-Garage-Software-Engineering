<?php
    include_once 'includes/header.inc.php';
?>

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

            <div class="container p-4 rounded-5 mb-5 bg-transparent">
                <div class="row rounded-5 m-2 text-black mb-4">
                    <h1 class="card-title text-black">Categories</h1>
                </div>
                
                <div class="row">
                    <div class="col d-flex justify-content-md-center">
                        <div class="card rounded-5 shadow-sm p-2 rounded" style="width: 25rem;">
                            <img src="img/categories-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-black">Skateboards</h2>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center bg-light">
                        <div class="card rounded-5 shadow-sm p-2" style="width: 25rem;">
                            <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-black">Accessories</h2>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-md-center bg-light">
                        <div class="card rounded-5 shadow-sm p-2 rounded" style="width: 25rem;">
                            <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                            <div class="card-body">
                                <h2 class="card-title text-black">Tools</h2>
                                <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container p-4 rounded-5 bg-transparent">
            <!-- shadow p-3 mb-5 rounded -->
                <div class="row rounded-5 m-2 mb-3">
                    <h1 class="card-title text-black">Products</h1>
                </div>

                <div class="row d-flex justify-content-around align-items-between">
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card rounded-5 shadow-sm p-2 rounded mb-2 mt-2" style="width: 18rem;">
                        <img src="img/products-card.jpg" class="card-img-top rounded-5" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-black">Card title</h5>
                            <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn rounded-5 text-white btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

<?php
    include_once 'includes/footer.inc.php';
?>