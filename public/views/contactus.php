<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css">
    <link href="../css/contactus.css" rel="stylesheet" type="text/css">
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
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Main Content -->
    <div class="container" id="mainContent">
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <h1>Contact Us</h1>
            <hr />
            <!-- Contact Form -->
            <div class="col-xs-6">
                <form action="#">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone Number" maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" height="10s0px" class="form-control" id="message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

            <!-- Photo on the right -->
            <div class="col-xs-6">
                <img src="../img/store/IMG_6651.JPG" alt="Bong on stairs" class="img-responsive">
                <br />
                <img src="../img/store/IMG_6656.JPG" alt="Jars in a case" class="img-responsive">
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <!-- Bootstrap JavaScript Plugins -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../js/holder.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
    <script src="../js/popper.min.js"></script>
</body>
</html>