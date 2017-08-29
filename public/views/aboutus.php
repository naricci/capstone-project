<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>About Us</title>
        <!-- Bootstrap CSS -->
        <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="../css/main.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <!-- NAV BAR -->
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
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
                        <li class="navbar-btn"><a href="aboutus.php">ABOUT US</a></li>
                        <li class="navbar-btn"><a href="gallery.php">GALLERY</a></li>
                        <li class="navbar-btn"><a href="news.php">NEWS</a></li>
                        <li class="navbar-btn"><a href="shop.php">SHOP</a></li>
                        <li class="navbar-btn"><a href="contactus.php">CONTACT US</a></li>
                    </ul>

                    <!-- Search Bar
                    <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    -->
                    <a class="navbar-brand navbar-centered" href="../index.html"><!-- The Stoop -->
                        <img alt="Brand" src="../img/logos/logo-main-large.png" width="100" height="100">
                    </a>

                    <!-- Navbar Right Side -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Add font awesome icons -->
                        <li><a href="https://www.facebook.com/thestoopri/" class="fa fa-facebook"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.instagram.com/stoopglass/" class="fa fa-instagram"></a></li>
                        <!-- Login Button -->
                        <li><a href="users/login.php">Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>

        <!-- Main Content -->
        <div class="container" id="mainContent">
            <!-- Columns are always 50% wide, on mobile and desktop -->
            <div class="row">
                <h1>About Us</h1>
                <hr />
                <!-- Google Maps Embed API -->
                <iframe 
                    width="600" 
                    height="450" 
                    frameborder="0" 
                    style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJky8uOsZM5IkRKw4YnDItgyY&key=AIzaSyBvKyn-4z0hzjG5rwrvJiQeoW6cQPFyDuI" allowfullscreen>
                </iframe>
            </div><!-- /.row -->
        </div><!-- /.container -->

        <!-- jQuery -->
        <script src="../../bower_components/jquery/dist/jquery.js"></script>
        <!-- Bootstrap JavaScript Plugins -->
        <script src="../../bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script src="../js/holder.min.js"></script>
        <script src="../js/ie10-viewport-bug-workaround.js"></script>
        <script src="../js/popper.min.js"></script>
    </body>
</html>