<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
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
                    <li class="navbar-btn active"><a href="aboutus.php">ABOUT <span class="sr-only">(current)</span></a></li>
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
                    <li class="navbar-btn"><a href="signup.php">Sign Up</a></li>
                    <!-- Login Button -->
                    <li class="navbar-btn"><a href="login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->

        </div><!-- /.container -->
    </nav>
    <!-- END OF NAVBAR -->


    <!-- MAIN CONTENT -->
    <div class="container mainContent">

        <!-- Page Title -->
        <h2>About Us</h2>
        <hr />    

        <div class="row">

            <div class="col-md-6 col-sm-12">
                <h4>Location</h4>

                <!-- Google Maps Embed API -->
                <iframe
                    class="embed-responsive-item"
                    width="400"
                    height="300"
                    frameborder="0"
                    style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=the%20stoop%2058%20main%20street%20east%20greenwich%20&key=AIzaSyD4Lnsz0jS8TCwXjnv2vuAK0LlFkv-gvu0"
                    allowfullscreen>
                </iframe>

            </div>

            <div class="col-md-3 col-sm-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Address</h4>
                    </div>
                    <div class="panel-body">
                        <p>58 Main Street</p>
                        <p>East Greenwich, RI, 02818</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h4 class="panel-title">Hours of Operation</h4>
                    </div>
                    <div class="panel-body">
                        <p>Monday - Thursday 10am - 8pm</p>
                        <p>Friday - Saturday 10am - 10pm</p>
                        <p>Sunday 12am - 6pm</p>
                    </div>
                </div>
            </div>

        </div><!-- /.row -->
    </div><!-- /.container.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include "templates/js_links.php"; ?>

</body>
</html>