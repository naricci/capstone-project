<?php

//session_start();
//
//if ( !isset($_SESSION['adminEmail']) ) {
//    header("Location : login.php");
//}

include 'includes/dbconnect.php';
include 'functions/utilities.php';
include 'functions/news_post_functions.php';
// include 'functions/upload_function.php';

$errors = '';
$results = '';
$success = '';

if ( isPostRequest() ) {

    // Directory where images will be saved
//    $target = "uploads/news_posts/";
//    $target = $target . basename( $_FILES['postImageName']['name']);

    // Grabs the data from the form
    $postTitle = filter_input(INPUT_POST, 'postTitle');
    $postWriter = filter_input(INPUT_POST, 'postWriter');
    //$postDate = filter_input(INPUT_POST, 'postDate');
    $postContent = filter_input(INPUT_POST, 'postContent');
    //$postImageName = filter_input(INPUT_POST, 'postImageName');
    $postImageName = ($_FILES['postImageName']['name']);
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

        $confirm = addNewsPost($postTitle, $postWriter, $postContent, $postImageName/*, $postAdminID*/);

        if ( $confirm === false ) {

            // Writes the photo to the server
//            if ( move_uploaded_file($_FILES['postImageName']['tmp_name'], $target) ) {
//
//                // Tells you if its all ok
//                echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
//
//            } else {
//
//                // Gives and error if its not
//                echo "Sorry, there was a problem uploading your file.";
//            }

            $results = 'News Post Added Successfully.';

        } else {

            $results = 'News Post NOT Added!';
        }
//    }

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


    <?php

    if ( count($_FILES) ) {
        try {

            // Undefined | Multiple Files | $_FILES Corruption Attack
            // If this request falls under any of them, treat it invalid.
            if ( !isset($_FILES['postImageName']['error']) or is_array($_FILES['postImageName']['error']) ) {
                throw new RuntimeException('Invalid Parameters');
            }

            // Check $_FILES['postImageName']['error'] value.
            switch ( $_FILES['postImageName']['error'] ) {
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
            if ( $_FILES['postImageName']['size'] > 25000000 ) {      // 100 Megabytes
                throw new RuntimeException('Exceeded file size limit.');
            }

            // DO NOT TRUST $_FILES['postImageName']['mime'] VALUE !!
            // Check MIME Type by yourself.
            $finfo = new finfo(FILEINFO_MIME_TYPE);
            $validExts = array(
                            'jpg' => 'image/jpeg',
                            'png' => 'image/png',
                            'gif' => 'image/gif',
                        );
            $ext = array_search( $finfo->file($_FILES['postImageName']['tmp_name']), $validExts, true );


            if ( false === $ext ) {
                throw new RuntimeException('Invalid file format.');
            }

            // You should name it uniquely.
            // DO NOT USE $_FILES['postImageName']['name'] WITHOUT ANY VALIDATION !!
            // On this example, obtain safe unique name from its binary data.
            $postImageName = sha1_file($_FILES['postImageName']['tmp_name']);
            $location = sprintf('uploads/news_posts/%s.%s', $postImageName, $ext);

            if ( !is_dir('uploads/news_posts') ) {
                mkdir('uploads/news_posts');
            }

            if ( !move_uploaded_file($_FILES['postImageName']['tmp_name'], $location) ) {
                throw new RuntimeException('Failed to move uploaded file.');
            }

            echo 'File is uploaded successfully.';

        } catch (RuntimeException $e) {

            echo $e->getMessage();
        }

        echo '<p>Image ' . $fileName . ' Successfully Uploaded</p>';
    }

    ?>

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

                    <fieldset>

                        <!-- Display errors if there are any -->
                        <p class="text-warning"><?php echo $errors; ?></p>

                        <!-- Confirm whether product data was added or not -->
                        <h3><?php echo $results; ?></h3>

                        <form action="#" method="post" enctype="multipart/form-data">
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
                                    <td>
                                        <input type="hidden" name="size" value="350000" />
                                        <input type="file" name="postImageName" maxlength="100">
                                    </td>
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

    <!-- JS LINKS -->
    <?php include 'includes/js_links.php'; ?>

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