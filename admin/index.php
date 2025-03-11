<?php

    include "../libs/load.php";

    // Start a session
    Session::start();

    // Redirect if the user is already logged in
    if (Session::get('login_user'))
    {
        header('Location: welcome.php');
        exit;
    }

    $error = "";

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
        // Check if both username and password keys exist in $_POST
        if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'] ?? "";
            $password = $_POST['password'] ?? "";
            $error = User::login($username, $password);
        }
    }

?>

<!DOCTYPE html>
<html dir="ltr">
    <head>
        <?php include "temp/head.php"; ?>
    </head>

    <body>
        <div class="main-wrapper">
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <div class="preloader">
                <div class="lds-ripple">
                    <div class="lds-pos"></div>
                    <div class="lds-pos"></div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background: url(assets/images/big/auth-bg.jpg) no-repeat center center;">
                <div class="auth-box row">
                    <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/data/5.jpg);"></div>
                    <div class="col-lg-5 col-md-7 bg-white">
                        <div class="p-3">
                            <div class="text-center">
                                <img src="assets/images/big/icon.png" alt="wrapkit" />
                            </div>
                            <h2 class="mt-3 text-center">Login</h2>
                            <p class="text-center">Enter your email address and password to access admin panel.</p>
                            <form class="mt-4" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label text-dark" for="uname">Username</label>
                                            <input class="form-control" id="uname" type="text" name="username" placeholder="enter your username" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label text-dark" for="pwd">Password</label>
                                            <input class="form-control" id="pwd" type="password" name="password" placeholder="enter your password" />
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <button type="submit" name="submit" class="btn w-100 btn-dark">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
        </div>
        <?php include "temp/footer.php"; ?>
    </body>
</html>