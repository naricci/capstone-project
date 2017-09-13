<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Insert New Product</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
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

    $results = '';

    if (isPostRequest()) {

        $productName = filter_input(INPUT_POST, 'productName');
        $productPrice = filter_input(INPUT_POST, 'productPrice');
        $productQuantity = filter_input(INPUT_POST, 'productQuantity');
        $productCategoryID = filter_input(INPUT_POST, 'productCategoryID');
        $productShortDescription = filter_input(INPUT_POST, 'productShortDescription');
        $productLongDescription = filter_input(INPUT_POST, 'productLongDescription');
        $productImage = filter_input(INPUT_POST, 'productImage');
        $productArtist = filter_input(INPUT_POST, 'productArtist');
        $confirm = addProduct($productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productImage, $productArtist);

        if ( $confirm === false ) {
            $results = 'Product Added Successfully.';
        } else {
            $results = 'Product NOT Added!';
        }
    }
    ?>

    <!-- MAIN -->
    <div class="container mainContent">
        <div class="row">

            <!-- ADMIN PANEL -->
            <?php include 'templates/admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <h1 align="center">Insert New Product</h1>
                <hr />

                <!-- Dismissible Alert -->
                <div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <!-- Confirm whether product data was added or not -->
                    <h3><?php echo $results; ?></h3>
                </div>

                <form action="insert_product.php" method="post" enctype="multipart/form-data">
                    <table align="center" width="1000" class="table table-responsive">
                        <tr class="form-group">
                            <td align="left"><b>Product Name:</b></td>
                            <td><input type="text" name="productName" size="60" required class="form-control" /></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Price:  </b></td>
                            <td><input type="number" name="productPrice" required class="form-control" /></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Quantity:  </b></td>
                            <td><input type="number" name="productQuantity" class="form-control" /></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Category:</b></td>
                            <td>
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
                            </td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Short Description:  </b></td>
                            <td><textarea name="productShortDescription" cols="20" rows="10"></textarea></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Long Description:  </b></td>
                            <td><textarea name="productLongDescription" cols="20" rows="10"></textarea></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Artist:  </b></td>
                            <td><input type="text" name="productArtist" class="form-control" /></td>
                        </tr>

                        <tr>
                            <td align="left"><b>Product Image:  </b></td>
                            <td><input type="file" name="productImage" /></td>
                        </tr>

                        <tr align="right">
                            <td colspan="7"><input class="btn btn-danger" type="submit" name="add_product" value="Add New Product" /></td>
                        </tr>
                    </table>
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
<?php
//
////$db = 'dbconnect.php';
//
//if (isset($_POST['add_product'])){
//    try
//    {
//        // Getting the text data from the fields
//        $productName = $_POST['productName'];
//        $productPrice = $_POST['productPrice'];
//        $productQuantity = $_POST['productQuantity'];
//        $productCategoryID = $_POST['productCategoryID'];
//        $productShortDescription = $_POST['productShortDescription'];
//        $productLongDescription = $_POST['productLongDescription'];
//        $productArtist = $_POST['productArtist'];
//
//        if (empty($productName)) throw new Exception("Product name cannot be empty");
//        if (empty($productPrice)) throw new Exception("Product price cannot be empty");
//        if (empty($productCategoryID)) throw new Exception("Product category cannot be empty");
//        if (empty($productShortDescription)) throw new Exception("Product short description cannot be empty");
//
//        //getting the image from the field
//        //$productImage = $_FILES['productImage']['name'];
//        //$productImageTemp = $_FILES['productImage']['tempName'];
//
//        //move_uploaded_file($productImageTemp,"product_images/$productImage");
//
//        //$insert_product = "INSERT INTO products (productName, productPrice, productQuantity, productCategoryID, productShortDescription, productLongDescription, productArtist, productImage) VALUES ('$productName', '$productPrice', '$productQuantity', '$productCategoryID', '$productShortDescription', '$productLongDescription', '$productArtist', '$productImage')";
//
//        $statement = $db->prepare("show table status like 'products'");
//        $statement->execute();
//        $result = $statement->fetchAll();
//        foreach ($result as $row);
//        $new_id = $row[10];
//
//        $up_file = $_FILES["image"]["name"];
//
//        $file_basename = substr($up_file, 0, strripos($up_file, "."));
//        $file_ext = substr($up_file, strripos($up_file, "."));
//        $f1 = "$new_id" . $file_ext;
//
//        if (($file_ext != ".png") && ($file_ext != ".jpg") && ($file_ext != ".jpeg") && ($file_ext!=".gif"))
//        {
//            throw new Exception("Only jpg, png, jpeg or gif image files allowed.");
//        }
//        move_uploaded_file($_FILES["image"]["tmp_name"], "product_images/" . $f1);
//
//        $statement = $db->prepare("INSERT INTO products (productName, productPrice, productQuantity, productCategoryID, productShortDescription, productLongDescription, productArtist, productImage) VALUES ('$productName', '$productPrice', '$productQuantity', '$productCategoryID', '$productShortDescription', '$productLongDescription', '$productArtist', '$productImage')");
//
//        $statement->execute(array($productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productArtist, $productImage));
//        $success = "Product successfully added.";
//
//        echo $success;
//        //$insert_pro = mysqli_query($con, $insert_product);
//
//        //if ($insert_pro) {
//           // echo "<script>alert('Product Has been inserted!')</script>";
//            //echo "<script>window.open('index.php?insert_product','_self')</script>";
//        //}
//    }
//    catch (Exception $e)
//    {
//        $msg=$e->getMessage();
//    }
//}
?>