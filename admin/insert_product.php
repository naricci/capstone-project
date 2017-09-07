<!DOCTYPE html>
<?php

include '../includes/dbconnect.php';
include '../includes/db.php';

?>
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

    <!-- Main Content -->
    <div class="container mainContent">
        <h1>Admin Area</h1>
        <hr />

        <form action="insert_product.php" method="post" enctype="multipart/form-data">

            <table align="center" width="1000">

                <tr align="center">
                    <td colspan="7"><h2>Insert New Post Here</h2></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Title:</b></td>
                    <td><input type="text" name="productName" size="60" required/></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Category:</b></td>
                    <td>
                        <select name="productCategoryID">
                            <option>Select a Category</option>
                            <?php
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
                    <td align="left"><b>Product Image:  </b></td>
                    <td><input type="file" name="productImage" /></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Price:  </b></td>
                    <td><input type="text" name="productPrice" required/></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Artist:  </b></td>
                    <td><input type="text" name="productArtistID" required/></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Short Description:  </b></td>
                    <td><textarea name="productShortDescription" cols="20" rows="10"></textarea></td>
                </tr>

                <tr>
                    <td align="left"><b>Product Long Description:  </b></td>
                    <td><textarea name="productLongDescription" cols="20" rows="10"></textarea></td>
                </tr>

                <tr align="right">
                    <td colspan="7"><input type="submit" name="insert_post" value="Insert Product Now"/></td>
                </tr>

            </table>

        </form>
    </div>

    <!-- FOOTER -->
    <footer class="navbar-static-bottom navbar-inverse">
        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-left">
                <p class="copyrightText">© 2017 The Stoop.</p>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <!-- Page Links -->
                <li><a href="../index.php">Home</a></li>
                <li><a href="../aboutus.php">About Us</a></li>
                <li><a href="../gallery.php">Gallery</a></li>
                <li><a href="../news.php">News</a></li>
                <li><a href="../shop.php">Shop</a></li>
                <li><a href="../contact.php">Contact</a></li>
            </ul>
        </div><!-- /.container -->
    </footer>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="../bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php

if (isset($_POST['insert_post'])){

    // Getting the text data from the fields
    $productName = $_POST['productName'];
    $productPrice = $_POST['productPrice'];
    $productCategoryID = $_POST['productCategoryID'];
    $productShortDescription = $_POST['productShortDescription'];
    $productLongDescription = $_POST['productLongDescription'];
    $productArtistID = $_POST['productArtistID'];

    //getting the image from the field
    $productImage = $_FILES['productImage']['name'];
    $productImageTemp = $_FILES['productImage']['tempName'];

    move_uploaded_file($productImageTemp,"product_images/$productImage");

    $insert_product = "INSERT INTO products (productName, productPrice, productCategoryID, productShortDescription, productLongDescription, productImage, productArtistID,) values ('$productName', '$productPrice', '$productCategoryID', '$productShortDescription', '$productLongDescription', '$productImage', '$productArtistID')";

    $insert_pro = mysqli_query($con, $insert_product);

    if ($insert_pro){
        echo "<script>alert('Product Has been inserted!')</script>";
        echo "<script>window.open('index.php?insert_product','_self')</script>";
    }
}
?>