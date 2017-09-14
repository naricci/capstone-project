<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>View Product</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="../bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- NAVBAR -->
    <?php include 'templates/navbar.php'; ?>

    <?php

    include 'includes/dbconnect.php';
    include 'functions/utilities.php';
    include 'functions/product_functions.php';

    $productID = filter_input(INPUT_GET, 'productID');

    $result = viewOneProduct($productID);

    ?>

    <!-- MAIN -->
    <div class="container mainContent">
        <div class="row">

            <!-- ADMIN PANEL -->
            <?php include 'admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <div class="page-header">
                    <h1>Admin Area <small>View & Manage Product</small></h1>
                </div>

                <!-- Table to display specific product from list -->
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Category ID</th>
                            <th>Short Description</th>
                            <th>Long Description</th>
                            <th>Image</th>
                            <th>Artist</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td><?php echo $result['productID']; ?></td>
                            <td><?php echo $result['productName']; ?></td>
                            <td><?php echo $result['productPrice']; ?></td>
                            <td><?php echo $result['productQuantity']; ?></td>
                            <td><?php echo $result['productCategoryID']; ?></td>
                            <td><?php echo $result['productShortDescription']; ?></td>
                            <td><?php echo $result['productLongDescription']; ?></td>
                            <td><?php echo $result['productImage']; ?></td>
                            <td><?php echo $result['productArtist']; ?></td>

                            <!-- Update & Delete Buttons -->
                            <td><a href="update_product.php?productID=<?php echo $result['productID']; ?>" class="btn btn-success" role="button">Update Product</a></td>
                            <td><a href="delete_product.php?productID=<?php echo $result['productID']; ?>" class="btn btn-danger" role="button">Delete Product</a></td>
                        </tr>
                    </tbody>
                </table>

            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->
    </div><!-- /.container .mainContent -->
    <!-- END OF MAIN -->

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="../bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>