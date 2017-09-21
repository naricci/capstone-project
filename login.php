<?php

session_start();

include 'functions/functions.php';
include 'includes/dbconnect.php';
include 'includes/db.php';

// Declared Variables
$errors = '';
$success = '';

if ( isset($_POST['login']) ) {

    $userEmail = $_POST['userEmail'];
    $userPassword = $_POST['userPassword'];

    if ( empty($userEmail) ) {
        $errors .= 'Please fill in your Email Address.<br />';
    }
    if ( empty($userPassword) ) {
        $errors .= 'Please fill in your Password.<br />';
    }

    if ( $userEmail != '' and $userPassword != '' and !empty($userEmail) and !empty($userPassword) ) {

        // $con = mysqli_connect("localhost", "root", "", "thestoop");  // db connection included in db.php file above...

        // Check to make sure email has not be used yet
        $check = mysqli_query($con, "SELECT * FROM users WHERE userEmail='$userEmail' and userPassword='$userPassword'");   //  and userActivated='1' needs to be added after mail function is fixed

        //$select_user = "SELECT * FROM users WHERE userPassword = '$userPassword' AND userEmail = '$userEmail'";

        // $query = mysqli_query($con, $select_user);

        if ( mysqli_num_rows($check) >= 1 ) {

//            $data = mysqli_fetch_array($query);

            $userData = mysqli_fetch_array($check);
            $_SESSION['userID'] = $userData['userID'];
            $_SESSION['userEmail'] = $userData['userEmail'];
            $_SESSION['userFirstName'] = $userData['userFirstName'];
            $_SESSION['userLastName'] = $userData['userLastName'];

            header("Location: index.php");

        } else {

            $errors .= 'Either your credentials do not match or you need to verify your email address.';
            // echo "Sorry, the email you provided does not match any user accounts in our database.";

        }

        //echo "User has logged in successfully.";
    } //else {

        //echo "Error:  Please fill in correct email and password in order to log in.";
    //}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Login</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
<!--    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />-->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
<!--    <link href="css/login.css" rel="stylesheet" type="text/css" />-->
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">

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

                    <!-- Social Media Icons -->
                    <li class="navbar-btn"><a href="https://www.facebook.com/thestoopri/"><span class="fa fa-facebook"></span></a></li>
                    <li class="navbar-btn"><a href="https://www.instagram.com/stoopglass/"><span class="fa fa-instagram"></span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php

                    if ( !isset($_SESSION['userEmail']) ) {
                        echo "<!-- Sign Up Button -->
<li class='navbar-btn'><a class='login-btn' href='signup.php'>Sign Up</a></li>
<!-- Log In Button -->
<li class='navbar-btn active'><a class='login-btn' href='login.php'>Log In  <span class=\"sr-only\">(current)</span></a></li>";
                    } else {
                        echo "<!-- Log Out Button -->
<li class='navbar-btn'><a class='login-btn' href='logout.php'>Log Out</a></li>";
                    }

                    ?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <!-- END OF NAVBAR -->


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">

            <!-- Page Title -->
            <h2>User Login</h2>
            <hr />

            <fieldset><!--<legend>Login</legend>-->

            <?php

            echo $errors;
            echo $success;

            ?>

            <!-- Login Form -->
            <form action="" method="post">

                <!-- Email Row-->
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <div class="form-group">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="userEmail" value="<?=((isset($userEmail))?$userEmail:'')?>" required maxlength="50" autofocus />
                        </div>
                    </div>
                </div>
                <!-- Password Row-->
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <div class="form-group">
                            <label>Password:</label>
                            <input type="password" class="form-control" name="userPassword" value="<?=((isset($userPassword))?$userPassword:'')?>" required maxlength="100" />
                        </div>
                    </div>
                </div>

                <!-- Login Button-->
                <div class="row">
                    <div class="col-md-6">
                        <h3 style="float:right; padding-right:20px;"><a href="signup.php" style="text-decoration:none; font-size: 14px;">New? Register Here</a></h3>
                    </div>
                    <div class="col-md-offset-7">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="login" id="btn-register">
                                <span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
                            </button>
                        </div>
                    </div>
                </div>

            </form>

            </fieldset>

        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include "includes/js_links.php"; ?>

</body>
</html>