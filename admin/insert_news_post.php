<?php

// session_start();    // uncomment once admin sign in is finished...

include 'includes/dbconnect.php';
include 'functions/utilities.php';
include 'functions/news_post_functions.php';

$errors = '';
$results = '';
$success = '';

if ( isPostRequest() ) {

    $postTitle = filter_input(INPUT_POST, 'postTitle');
    $postWriter = filter_input(INPUT_POST, 'postWriter');
    //$postDate = filter_input(INPUT_POST, 'postDate');
    $postContent = filter_input(INPUT_POST, 'postContent');
    $postImageName = filter_input(INPUT_POST, 'postImageName');
    //$postAdminID = filter_input(INPUT_POST, 'postAdminID');

    // Simple form validation
    if ( empty($postTitle) ) {
        $errors .= "Please fill in a Title for the news post.<br />";
    }
    if ( empty($postWriter) ) {
        $errors .= "Please add a Writer for the news post.<br />";
    }
    if ( empty($postContent) ) {
        $errors .= "Please add some Content to the news post.<br />";
    }
    if ( empty($postImageName) ) {
        $errors .= "Please add an Image to the news post.<br />";
    }
    // Image Upload
    $file_name = date("Y-m-d-H-i-s").sha1($_FILES['postImageName']['name']);
    $destination = "product_images/" . $file_name;
    $postImageName = $_FILES['postImageName']['image_tmp_name'];

    if ( move_uploaded_file($postImageName, $destination) ) {

        $confirm = addNewsPost($postTitle, $postWriter, $postContent, $postImageName/*, $postAdminID*/);

        if ( $confirm === false ) {

            $results = 'News Post Added Successfully.';

        } else {

            $results = 'News Post NOT Added!';
        }
    }

}

?>
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
<!--    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />-->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
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


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">
            <div class="row">

                <!-- ADMIN PANEL -->
                <?php include 'admin_panel.php'; ?>

                <!-- Main Content Area -->
                <div class="col-md-9">
                    <div class="page-header">
                        <h1>Admin Area <small class="text-primary">Insert News Post</small></h1>
                    </div>

                    <!-- Dismissible Alert -->
    <!--                <div class="alert alert-warning alert-dismissible" role="alert">-->
    <!--                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
    <!--                        <span aria-hidden="true">&times;</span>-->
    <!--                    </button>-->
    <!--                </div>-->

                    <fieldset>

                        <!-- Display errors if there are any -->
                        <p class="text-warning"><?php echo $errors; ?></p>

                        <!-- Confirm whether product data was added or not -->
                        <h3><?php echo $results; ?></h3>

                        <form action="#" method="post">
                            <table align="center" width="1000" class="table table-responsive">

                                <tr class="form-group">
                                    <td align="left"><b>Post Title:</b></td>
                                    <td><input type="text" name="postTitle"  maxlength="100" required class="form-control" autofocus /></td>
                                </tr>

                                <tr>
                                    <td align="left"><b>Post Writer:</b></td>
                                    <td><input type="text" name="postWriter" maxlength="100" required class="form-control" /></td>
                                </tr>

                                <tr>
                                    <td align="left"><b>Post Content:</b></td>
                                    <td><textarea name="postContent" class="form-control" cols="20" rows="10"  maxlength="2000"></textarea></td>
                                </tr>

                                <tr>
                                    <td align="left"><b>Post Image:</b></td>
                                    <td><input type="file" name="postImageName" maxlength="100"></td>
                                </tr>

                                <tr align="right">
                                    <td colspan="7"><input class="btn btn-primary" type="submit" name="add_news_post" value="Add News Post" /></td>
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