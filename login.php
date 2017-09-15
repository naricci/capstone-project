<!DOCTYPE html>
<?php
include 'functions/functions.php';
include 'includes/dbconnect.php';
include 'includes/db.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Login</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-title navbar-btn" href="index.php">THE STOOP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- About Us Button -->
                    <li class="navbar-btn"><a href="aboutus.php">ABOUT</a></li>
                    <!-- Gallery Button -->
                    <li class="navbar-btn"><a href="gallery.php">GALLERY</a></li>
                    <!-- News Button -->
                    <li class="navbar-btn"><a href="news.php">NEWS</a></li>
                    <!-- Shop Button -->
                    <li class="navbar-btn"><a href="shop.php">SHOP</a></li>
                    <!-- Contact Us Button -->
                    <li class="navbar-btn"><a href="contact.php">CONTACT</a></li>
                    <!-- Admin Button -->
                    <li class="dropdown navbar-btn">
                        <a href="admin/admin.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin/admin.php">Admin Home Page</a></li>
                            <li><a href="#">Create New Admin</a></li>
                            <li><a href="#">Manage About Us Page</a></li>
                            <li><a href="#">Manage News Posts</a></li>
                            <li><a href="#">Update Shop Products</a></li>
                            <li><a href="#">View Product Requests</a></li>
                        </ul>
                    </li>
                    <!-- Social Media Icons -->
                    <li class="navbar-btn"><a href="https://www.facebook.com/thestoopri/"><span class="fa fa-facebook"></span></a></li>
                    <li class="navbar-btn"><a href="https://www.instagram.com/stoopglass/"><span class="fa fa-instagram"></span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Sign Up Button -->
                    <li class="navbar-btn"><a href="customer_register.php">Sign Up</a></li>
                    <!-- Login Button -->
                    <li class="navbar-btn active"><a href="login.php">Login <span class="sr-only">(current)</span></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- MAIN CONTENT -->
    <div class="container mainContent">
        <!-- Page Title -->
        <h2>User Login</h2>
        <hr />

        <!-- Registration Form -->
        <form class="form-signin" method="post" action="#">

            <!-- Username Row-->
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" name="userName" required maxlength="50"/>
                    </div>
                </div>
            </div>
            <!-- Password Row-->
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="userPassword" required maxlength="100" />
                    </div>
                </div>
            </div>

            <!-- Login Button-->
            <div class="row">
                <div class="col-md-6">
                    <h2 style="float:right; padding-right:20px;"><a href="customer_register.php" style="text-decoration:none; font-size: 16px;">New? Register Here</a></h2>
                </div>
                <div class="col-md-offset-7">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" name="register" id="btn-register">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div><!-- /.container.mainContent -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php

if(isset($_POST['login'])){

    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    $sel_c = "SELECT * FROM users WHERE userPassword='$userPassword' AND userName='$userName'";

    $run_c = mysqli_query($con, $sel_c);

    $check_customer = mysqli_num_rows($run_c);

    if ($check_customer == 0){

        echo "<script>alert('Password or email is incorrect, plz try again!')</script>";
        exit();
    }

    $ip = getIp();

    $sel_cart = "select * from cart where ip_add='$ip'";

    $run_cart = mysqli_query($con, $sel_cart);

    $check_cart = mysqli_num_rows($run_cart);

    if($check_customer>0 AND $check_cart==0){

    $_SESSION['customer_email']=$c_email;

    echo "<script>alert('You logged in successfully, Thanks!')</script>";
    <!--echo "<script>window.open('customer/my_account.php','_self')</script>";-->
    echo "<script>window.open('index.php')</script>";

    }
    else {
        $_SESSION['customer_email']=$c_email;

        echo "<script>alert('You logged in successfully, Thanks!')</script>";
        echo "<script>window.open('checkout.php','_self')</script>";
    }
}

?>