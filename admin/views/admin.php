<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to The Stoop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap-theme.css">
    <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="../../public/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <!-- NAV BAR -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <!-- HOME BUTTON
                    <li class="active"><a href="#">HOME <span class="sr-only">(current)</span></a></li>
                    -->
                    <li class="navbar-btn"><a href="../../public/views/aboutus.php">ABOUT US</a></li>
                    <li class="navbar-btn"><a href="../../public/views/gallery.php">GALLERY</a></li>
                    <li class="navbar-btn"><a href="../../public/views/news.php">NEWS</a></li>
                    <li class="navbar-btn"><a href="../../public/views/shop.php">SHOP</a></li>
                    <li class="navbar-btn"><a href="../../public/views/contactus.php">CONTACT US</a></li>
                </ul>

                <!-- Search Bar
                <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                </form>
                -->
                <a class="navbar-brand navbar-centered" href="../../public/index.html"><!-- The Stoop -->
                    <img alt="Brand" src="img/logos/logo-deepgreen2.png" width="100" height="100">
                </a>

                <!-- Navbar Right Side -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Add font awesome icons -->
                    <li><a href="https://www.facebook.com/thestoopri/" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/stoopglass/" class="fa fa-instagram"></a></li>
                    <!-- Login Button -->
                    <li><a href="../../public/views/users/login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- FOOTER -->
    <footer class="navbar-static-bottom navbar-inverse">
        <div class="container">
            <p class="copyrightText">© 2017 The Stoop.</p>
            <ul class="nav navbar-nav navbar-right">
                <!-- Page Links -->
                <li><a href="../../public/index.html">Home</a></li>
                <li><a href="../../public/views/aboutus.php">About Us</a></li>
                <li><a href="../../public/views/gallery.php">Gallery</a></li>
                <li><a href="../../public/views/news.php">News</a></li>
                <li><a href="../../public/views/shop.php">Shop</a></li>
                <li><a href="../../public/views/contactus.php">Contact Us</a></li>
                <li><a href="#" class="backToTop">Back to top</a></li>
            </ul>
        </div><!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <!-- Bootstrap JavaScript Plugins -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../public/js/holder.min.js"></script>
    <script src="../../public/js/ie10-viewport-bug-workaround.js"></script>
    <script src="../../public/js/popper.min.js"></script>

</body>
</html>
