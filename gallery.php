<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
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
                    <li class="navbar-btn active"><a href="gallery.php">GALLERY <span class="sr-only">(current)</span> </a></li>
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
<li class='navbar-btn'><a class='login-btn' href='login.php'>Log In</a></li>";
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
            <h2>Gallery</h2>
            <hr />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/green-pipe.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/pig-jar.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/blue-purple-bubbler.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/lobster-claw.JPG">
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/bug-spoon.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/deadhead-spoon.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/TS1.jpg">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/the-shop.JPG">
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/eyeball-bong.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6537.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6545.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/glow-in-the-dark-pipe.JPG">
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/grinders.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/the-potatoe-heads.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6566.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6568.JPG">
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6571.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6649.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6597.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6603.JPG">
                </div>
            </div>
            <br />
            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/coral-bong.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6619.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6625.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6631.JPG">
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6649.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6670.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/stairs/lobster-claw-outside.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6726.JPG">
                </div>
            </div>
            <br />

            <div class="row">
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/products/IMG_6730.JPG">
                </div>
                <div class="col-md-3">
                    <img class="img-responsive img-thumbnail" src="http://s3.amazonaws.com/stoop-bucket/images/stairs/group-of-water-pipes.JPG">
                </div>
            </div>

        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <br />
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include "includes/js_links.php"; ?>

</body>
</html>
