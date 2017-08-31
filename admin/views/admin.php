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
        <!-- NAVBAR -->
        <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">THE STOOP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- About Us Button -->
                    <li><a href="views/aboutus.php">ABOUT</a></li>  
                    <!-- Gallery Button -->                  
                    <li><a href="views/gallery.php">GALLERY</a></li>
                    <!-- News Button -->
                    <li><a href="views/news.php">NEWS</a></li>
                    <!-- Shop Button -->
                    <li><a href="views/shop.php">SHOP</a></li>
                    <!-- Contact Us Button -->     
                    <li><a href="views/contact.php">CONTACT</a></li>
                    <!-- Admin Button -->
                    <li class="dropdown active">
                    <a href="admin.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Create New Admin</a></li>
                        <li><a href="#">Manage About Us Page</a></li>
                        <li><a href="#">Manage News Posts</a></li>
                        <li><a href="#">Update Shop Products</a></li>
                        <li><a href="#">View Product Requests</a></li>
                    </ul>
                    </li>        
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
                    <!-- Login Button -->
                    <li><a href="views/users/login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

    <!-- Main Content -->
    <div class="container" id="mainContent">
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <!-- Breadcrumbs -->
            <ol class="breadcrumb">
                <li><a href="../index.html">Home</a></li>
                <li class="active">Admin Home</li>
            </ol>
            <h1>Admin Home</h1>
            <hr />
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="navbar-fixed-bottom navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-left">
                <p class="copyrightText">© 2017 The Stoop.</p>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Page Links -->
                <li><a href="../../public/index.html">Home</a></li>
                <li><a href="../../public/views/aboutus.php">About Us</a></li>
                <li><a href="../../public/views/gallery.php">Gallery</a></li>
                <li><a href="../../public/views/news.php">News</a></li>
                <li><a href="../../public/views/shop.php">Shop</a></li>
                <li><a href="../../public/views/contact.php">Contact</a></li>
            </ul>
        </div><!-- /.container -->
    </footer>   

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.js"></script>
    <!-- Bootstrap JavaScript Plugins -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
