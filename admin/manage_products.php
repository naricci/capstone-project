<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manage Products</title>
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
    include 'functions/functions.php';

    $results = viewAllProducts();

    ?>

    <!-- MAIN -->
    <div class="container mainContent">
        <div class="row">

            <!-- ADMIN PANEL -->
            <?php include 'templates/admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <div class="page-header">
                    <h1>Admin Area <small>Manage Products</small></h1>
                </div>

                <!-- Products Table -->
                <table border="1" class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($results as $row): ?>
                        <tr>
                            <td align="center"><?php echo $row['productID']; ?></td>
                            <td align="center"><?php echo $row['productName']; ?></td>

                            <!-- Read, Update, Delete Buttons -->
                            <td align="center"><a href="view_product.php?productID=<?php echo $row['productID']; ?>" class="btn btn-primary">View</a></td>
                            <td align="center"><a href="update_product.php?productID=<?php echo $row['productID']; ?>" class="btn btn-success">Update</a></td>
                            <td align="center"><a href="delete_product.php?productID=<?php echo $row['productID']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
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