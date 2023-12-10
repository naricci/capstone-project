<?php

session_start();

$env = file_get_contents(__DIR__."/.env");
$lines = explode("\n", $env);

foreach ($lines as $line) {
  preg_match("/([^#]+)\=(.*)/", $line, $matches);
  if (isset($matches[2])) {
    putenv(trim($line));
  }
}

include 'functions/functions.php';

//if ( !isset($_SESSION['userEmail']) ) {
//    header("Location: login.php");
//}
//
//echo "Welcome " . $_SESSION['userFirstName'] . "!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to The Stoop</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/carousel.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
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

        <!-- CAROUSEL -->
        <div class="container main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active">
                        <img class="img-responsive" src="images/products/glow-in-the-dark-pipe.JPG" alt="Glow in the dark pipe">
                        <div class="container">
                            <div class="carousel-caption d-none d-md-block text-left">
                                <h1>Welcome to The Stoop!</h1>
                                <p>
                                    We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.
                                </p>
                                <p>
                                    <a class="btn btn-lg btn-primary" href="signup.php" role="button">Sign up today</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/stairs/group-of-water-pipes.JPG" alt="Water Pipes on Steps">
<!--                        <div class="container">-->
<!--                            <div class="carousel-caption d-none d-md-block text-left">-->
<!--                                <h1>Check out our newest products on the Shop Page!</h1>-->
<!--                                <p>-->
<!--                                    <a class="btn btn-lg btn-primary" href="shop.php" role="button">Click Here</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/products/case-of-bowls2.JPG" alt="Case of Merch">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/products/coral-bong.JPG" alt="Coral Pipe">
<!--                        <div class="container">-->
<!--                            <div class="carousel-caption d-none d-md-block text-right">-->
<!--                                <h1 style="color: black;">Check out our newest products on the Shop Page!</h1>-->
<!--                                <p>-->
<!--                                    <a class="btn btn-lg btn-primary" href="shop.php" role="button">Click Here</a>-->
<!--                                </p>-->
<!--                            </div>-->
<!--                        </div>-->
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="images/products/the-potatoe-heads.JPG" alt="Mr. & Mr.s Potato Head Jars">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel.slide -->
        </div><!-- /.container.main -->
        <!-- END OF CAROUSEL -->


        <!-- JUMBOTRON -->
        <div class="container main">
            <div class="jumbotron">

                <?php

                if ( isset($_SESSION['userEmail']) ) {
                    echo "<h1><i>Welcome to The Stoop, ". $_SESSION['userFirstName'] . "!</i></h1>";
                } else {
                    echo "<h1><i>Welcome to The Stoop!</i></h1>";
                }
                ?>

                <p>
                    We are a Rhode Island Glass Gallery that specializes in providing local New England artists with a platform to sell their glass.
                </p>
                <p>
                    <a class="btn btn-primary btn-lg" href="aboutus.php" role="button">Learn more</a>
                </p>
            </div><!-- /.jumbotron -->
        </div><!-- /.container.main -->
        <!-- END OF JUMBOTRON -->


        <!-- MARKETING AREA -->
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">

                <!-- ABOUT US -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/logos/logo-keppel.png" alt="Shop Logo" width="140" height="140">
                    <h2>About Us</h2>
                    <p>We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.  We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.</p>
                    <p><a class="btn btn-secondary details-btn" href="aboutus.php" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <!-- GALLERY -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/products/eyeball-bowls.JPG" alt="Glow in the dark pipe" width="140" height="140">
                    <h2>Gallery</h2>
                    <p>We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.  We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.</p>
                    <p><a class="btn btn-secondary details-btn" href="gallery.php" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <!-- NEWS -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/newspaper.png" alt="Newspaper" width="140" height="140">
                    <h2>News</h2>
                    <p>We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.  We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.</p>
                    <p><a class="btn btn-secondary details-btn" href="news.php" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->

            <!-- Next Three columns of text below the carousel -->
            <div class="row">

                <!-- SHOP -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/store/shelf2-more-bongs.JPG" alt="Row of Pipes" width="140" height="140">
                    <h2>Shop</h2>
                    <p>We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.  We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.</p>
                    <p><a class="btn btn-secondary details-btn" href="shop.php" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <!-- DIRECTIONS -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/map.png" alt="Map of Main Street" width="140" height="140">
                    <h2>Directions</h2>
                    <p>We are a located on the 2nd floor of 58 Main Street in the heart of East Greenwich, RI.  Click here for a map, directions and store hours.</p>
                    <p><a class="btn btn-secondary details-btn" href="#" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->

                <!-- CONTACT US -->
                <div class="col-lg-4">
                    <img class="img-circle" src="images/form-icon.png" alt="Form" width="140" height="140">
                    <h2>Contact Us</h2>
                    <p>We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.  We are a Rhode Island Glass Gallery that specializes in providing local New England artist with a platform to sell their glass.</p>
                    <p><a class="btn btn-secondary details-btn" href="contact.php" role="button">View details »</a></p>
                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->

        </div><!-- /.container.marketing -->
        <!-- END OF MARKETING AREA -->

    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include("includes/footer.php"); ?>


    <!-- JS LINKS -->
    <?php include("includes/js_links.php"); ?>
    <script src="js/holder.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>
