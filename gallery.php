<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gallery</title>
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
                    <li class="navbar-btn active"><a href="gallery.php">GALLERY <span class="sr-only">(current)</span> </a></li>
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
                <!--
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Sign Up Button -->
                    <li class="navbar-btn"><a href="customer_register.php">Sign Up</a></li>
                    <!-- Login Button -->
                    <li class="navbar-btn"><a href="login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Main Content -->
    <div class="container mainContent">

        <!-- Page Title -->
        <h2>Gallery</h2>
        <hr />

        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/store/IMG_6651.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/store/IMG_6656.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/categories/IMG_6602.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/stairs/IMG_6597.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/stairs/IMG_6620.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/stairs/IMG_6625.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/stairs/IMG_6628.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/spoon.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6530.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6537.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6545.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6552.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6556.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6564.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6566.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6568.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6571.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6586.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6597.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6603.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6607.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6619.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6625.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6631.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6649.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6670.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6675.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6726.JPG">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6730.JPG">
            </div>
            <div class="col-md-3">
                <img class="img-responsive img-thumbnail" src="images/products/IMG_6733.JPG">
            </div>
        </div>
    </div>
    <br />

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