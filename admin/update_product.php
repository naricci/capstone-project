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
    <!-- Text Editor -->
    <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>
<body>
    <!-- NAVBAR -->
    <?php include 'templates/navbar.php'; ?>

    <?php

    include 'includes/dbconnect.php';
    include 'functions/functions.php';

    $result = '';

    if (isPostRequest()) {
        $productID = filter_input(INPUT_POST, 'productID');
        $productName = filter_input(INPUT_POST, 'productName');
        $productPrice = filter_input(INPUT_POST, 'productPrice');
        $productQuantity = filter_input(INPUT_POST, 'productQuantity');
        $productCategoryID = filter_input(INPUT_POST, 'productCategoryID');
        $productShortDescription = filter_input(INPUT_POST, 'productShortDescription');
        $productLongDescription = filter_input(INPUT_POST, 'productLongDescription');
        $productImage = filter_input(INPUT_POST, 'productImage');
        $productArtist = filter_input(INPUT_POST, 'productArtist');

        $updated = updateProduct($productID, $productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productImage, $productArtist);

        if ($updated === true) {
            $result = 'Product updated';
        } else {
            $result = 'Product NOT updated';
        }

    } else {
        $productID = filter_input(INPUT_GET, 'productID');

        if ( !isset($productID) ) {
            exit('Product not found');
        }

        $row = viewOneProduct($productID);
        $productName = $row['productName'];
        $productPrice = $row['productPrice'];
        $productQuantity = $row['productQuantity'];
        $productCategoryID = $row['productCategoryID'];
        $productShortDescription = $row['productShortDescription'];
        $productLongDescription = $row['productLongDescription'];
        $productImage = $row['productImage'];
        $productArtist = $row['productArtist'];
    }
    ?>

    <!-- MAIN -->
    <div class="container mainContent">
        <div class="row">

            <!-- ADMIN PANEL -->
            <?php include 'templates/admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <div class="page-header">
                    <h1>Admin Area <small>Update Product</small></h1>
                </div>

                <h3><?php echo $result; ?></h3>

                <form method="post" action="#">
                    <div class="form-group">
                        Product Name <input type="text" value="<?php echo $productName; ?>" name="productName" class="form-control" required />
                    </div><br />
                    <div class="form-group">
                        Product Price <input type="number" value="<?php echo $productPrice; ?>" name="productPrice" class="form-control" required />
                    </div><br />
                    <div class="form-group">
                        Product Quantity <input type="number" value="<?php echo $productQuantity; ?>" name="productQuantity" class="form-control" />
                    </div><br />
                    <div class="form-group">
                        <select name="productCategoryID" required class="form-control">
                            <option>Select a Category</option>
                            <?php

                            include 'includes/db.php';

                            $get_category = "SELECT * FROM categories";

                            $run_category = mysqli_query($con, $get_category);

                            while ($row_category=mysqli_fetch_array($run_category)) {
                                $categoryID = $row_category['categoryID'];
                                $categoryName = $row_category['categoryName'];
                                $categoryDescription = $row_category['categoryDescription'];

                                echo "<option value='$categoryID'>$categoryName</option>";
                            }
                            ?>
                        </select>
                    </div><br />
                    <div class="form-group">
                        <label>Short Description</label>
                        <textarea value="<?php echo $productLongDescription; ?>" name="productLongDescription" class="form-control" cols="20" rows="10"></textarea>
                    </div><br />
                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea value="<?php echo $productLongDescription; ?>" name="productLongDescription" class="form-control" cols="20" rows="10"></textarea>
                    </div><br />
                    <div class="form-group">
                        Image <input type="file" value="<?php echo $productImage; ?>" name="productImage" class="form-control" />
                    </div><br />
                    <div class="form-group">
                        Artist Name <input type="text" value="<?php echo $productArtist; ?>" name="productArtist" class="form-control" />
                    </div><br />
                    <div class="form-group">
                        <input type="hidden" value="<?php echo $productID; ?>" name="productID" />
                        <input type="submit" value="Update" class="btn btn-primary form-control" />
                    </div>
                </form>

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
