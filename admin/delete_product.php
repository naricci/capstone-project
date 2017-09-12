<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Delete Product</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
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
                <a class="navbar-brand" href="../index.php">THE STOOP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- About Us Button -->
                    <li><a href="../aboutus.php">ABOUT</a></li>
                    <!-- Gallery Button -->
                    <li><a href="../gallery.php">GALLERY</a></li>
                    <!-- News Button -->
                    <li><a href="../news.php">NEWS</a></li>
                    <!-- Shop Button -->
                    <li><a href="../shop.php">SHOP</a></li>
                    <!-- Contact Us Button -->
                    <li><a href="../contact.php">CONTACT</a></li>
                    <!-- Admin Button -->
                    <li class="dropdown active">
                        <a href="admin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret sr-only">(current)</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin.php" class="active">Admin Home Page</a></li>
                            <li><a href="create-new-admin.php">Create New Admin</a></li>
                            <li><a href="#">Manage About Us Page</a></li>
                            <li><a href="manage-news-posts.php">Manage News Posts</a></li>
                            <li><a href="update-shop-products.php">Update Shop Products</a></li>
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
                    <!-- Sign Up Button -->
                    <li><a href="../customer_register.php">Sign Up</a></li>
                    <!-- Login Button -->
                    <li><a href="../login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <?php

    include 'includes/dbconnect.php';
    include 'functions/functions.php';

    $productID = filter_input(INPUT_GET, 'productID');

    $isDeleted = deleteProduct($productID);
    ?>
    <div class="container mainContent">
        <h1>Product <?php echo $productID; ?>
            <?php if ( !$isDeleted ): ?>
                NOT
            <?php endif; ?>
            Deleted.</h1>
    </div> <!--/container-->

    <?php include '../templates/footer.php' ?>

</body>
</html>
