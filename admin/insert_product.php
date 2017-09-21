<?php

//session_start();
//
//if ( !isset($_SESSION['adminEmail']) ) {
//    header("Location : login.php");
//}

include 'includes/dbconnect.php';
include 'functions/utilities.php';
include 'functions/product_functions.php';
// include 'functions/upload_function.php';

// Variables
$errors = '';
$success = '';
$results = '';

if ( isPostRequest() && count($_FILES) ) {

    try {
        // Grabs the data from the form fields
        $productName = filter_input(INPUT_POST, 'productName');
        $productPrice = filter_input(INPUT_POST, 'productPrice');
        $productQuantity = filter_input(INPUT_POST, 'productQuantity');
        $productCategoryID = filter_input(INPUT_POST, 'productCategoryID');
        $productShortDescription = filter_input(INPUT_POST, 'productShortDescription');
        $productLongDescription = filter_input(INPUT_POST, 'productLongDescription');
        $productImage = ($_FILES['productImage']['name']);
        $productArtist = filter_input(INPUT_POST, 'productArtist');

        // Simple form validation
        if ( empty($productName) || !isset($productName) ) {
            $errors .= "Please fill in a Title for the news post.<br />";
        }
        if ( empty($productPrice) || !isset($productPrice) ) {
            $errors .= "Please add a Writer for the news post.<br />";
        }
        if ( empty($productCategoryID) || !isset($productCategoryID) ) {
            $errors .= "Please add an Image to the news post.<br />";
        }
        if ( empty($productShortDescription) || !isset($productShortDescription) ) {
            $errors .= "Please add an Image to the news post.<br />";
        }

        // Undefined | Multiple Files | $_FILES Corruption Attack
        // If this request falls under any of them, treat it invalid.
        if ( !isset($_FILES['productImage']['error']) or is_array($_FILES['productImage']['error']) ) {
            throw new RuntimeException('Invalid Parameters');
        }

        // Check $_FILES['productImage']['error'] value.
        switch ( $_FILES['productImage']['error'] ) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new RuntimeException('No file sent.');
            case UPLOAD_ERR_INI_SIZE:
            case UPLOAD_ERR_FORM_SIZE:
                throw new RuntimeException('Exceeded file size limit.');
            default:
                throw new RuntimeException('Unknown errors.');
        }

        // You should also check file size here.
//        if ( $_FILES['productImage']['size'] > 50000000 ) {      // 50 Megabytes
//            throw new RuntimeException('Exceeded file size limit.');
//        }

        // DO NOT TRUST $_FILES['productImage']['mime'] VALUE !!
        // Check MIME Type by yourself.
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $validExts = array(
            'jpg' => 'image/jpg',
            'png' => 'image/png',
            'gif' => 'image/gif'
        );
        $ext = array_search( $finfo->file($_FILES['productImage']['tmp_name']), $validExts, true );

        if ( false === $ext ) {
            throw new RuntimeException('Invalid file format.  Images can only be jpg, png or gif format.');
        }

        // You should name it uniquely.
        // DO NOT USE $_FILES['productImage']['name'] WITHOUT ANY VALIDATION !!
        // On this example, obtain safe unique name from its binary data.
        $productImage = sha1_file($_FILES['productImage']['tmp_name']);
        $location = sprintf('uploads/products/%s.%s', $productImage, $ext);

        if ( !is_dir('uploads/products') ) {
            mkdir('uploads/products');
        }

        if ( !move_uploaded_file($_FILES['productImage']['tmp_name'], $location) ) {
            throw new RuntimeException('Failed to move uploaded file.');
        }

        $confirm = addProduct($productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productImage, $productArtist);

        if ( $confirm === true ) {
            $results = 'Product Added Successfully.';
        } else {
            $results = 'Product NOT Added!';
        }
    } catch (RuntimeException $e) {
        echo $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Insert New Product</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
    <!-- Text Editor --><!-- src="https://cloud.tinymce.com/stable/tinymce.min.js" -->
    <script src="http://tinymce.cachefly.net/4.1/tinymce.min.js"></script>
    <script>
        tinymce.init({selector:'textarea'});
    </script>
</head>
<body>
    <!-- NAVBAR -->
    <?php include 'templates/navbar.php'; ?>


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">
            <div class="row">

                <!-- ADMIN PANEL -->
                <?php include 'admin_panel.php'; ?>

                <!-- Main Content Area -->
                <div class="col-md-9">
                    <div class="page-header">
                        <h1>Admin Area <small class="text-primary">Insert New Product</small></h1>
                    </div>

                    <fieldset>

                        <!-- Display errors if there are any -->
                        <p class="text-danger"><?php echo $errors; ?></p>
                        <!-- Confirm whether product data was added or not -->
                        <p class="text-primary"><?php echo $results; ?></p>

                        <!-- PRODUCT INSERT FORM -->
                        <form action="#" method="post" enctype="multipart/form-data">

                            <table align="center" width="1000" class="table table-responsive">
                            <tr class="form-group">
                                <td align="left"><b>Product Name:</b></td>
                                <td><input type="text" name="productName" size="60" required class="form-control" autofocus /></td>
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

                            <?php
    //                        if ( count($_FILES) ) {
    //                            try {
    //                                $fileName = uploadImage('productImage');
    //                            } catch (RuntimeException $e) {
    //                                // $fileName = filter_input(INPUT_POST, 'oldimage');
    //                                $fileName = '';
    //                            }
    //
    //                            echo '<p>Image ' . $fileName . ' Uploaded</p>';
    //                        }
//                            $filename = $_FILES['productImage']['name'];
//                            $tmp_location = $_FILES['productImage']['temp_name'];
//                            move_uploaded_file($tmp_location, 'product_images/'.$filename);

                            ?>

                            <tr>
                                <td align="left"><b>Product Image:  </b></td>
                                <td>
                                    <input type="hidden" name="MAX_FILE_SIZE" value="50000000" />
                                    <input type="file" name="productImage" />
                                </td>
                            </tr>

                            <tr align="right">
                                <td><input type="hidden" name="submit-product" /></td>
                                <td colspan="7"><input class="btn btn-primary" type="submit" value="Add New Product" /></td>
                            </tr>

                        </table>
                    </form>

                    </fieldset>

                </div><!-- /.col-md-9 -->

            </div><!-- /.row -->
        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include 'includes/js_links.php' ?>
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