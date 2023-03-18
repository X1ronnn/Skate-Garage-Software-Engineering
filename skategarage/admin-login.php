<?php
    include_once 'includes/header.inc.php';
?>

        <div class="page-body d-flex justify-content-center">
            <div class="col-lg-4 p-4 rounded-5 shadow p-3 mb-5 bg-light mt-5 justify-content-between">
                <div class="row rounded-5 m-2 text-black mb-4">
                    <h1 class="card-title">Admin Login</h1>
                </div>
                <div class="row m-auto">
                    <div class="col d-flex justify-content-center p-5 form-control rounded-5">
                        <form action="includes/admin-login.inc.php" method="post">
                            <div class="row mb-4">
                                <h3>Account Details</h3>
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username</label>
                                <input type="text" name="adminUsername" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="row mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="adminPassword" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="col d-flex justify-content-sm-center mt-5">
                                <button type="submit" name="submit" class="btn btn-primary text-white">Log In</button>
                            </div>
                            <div class="col d-flex justify-content-sm-center">
                                <?php
                                    if (isset($_GET["error"])) {

                                        if ($_GET["error"] == "adminemptyinput") {
        
                                            echo "<p class='mt-3'>Fill in all fields!</p>";
                                        }
        
                                        else if ($_GET["error"] == "adminwronglogin") {
        
                                            echo "<p class='mt-3'>Incorrect username or password!</p>";
                                        }
                                    }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
    include_once 'includes/footer.inc.php';
?>