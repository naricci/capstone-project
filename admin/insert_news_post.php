<?php

//session_start();
//
//if ( !isset($_SESSION['adminEmail']) ) {
//    header("Location : login.php");
//}

include 'includes/dbconnect.php';
include 'functions/utilities.php';
include 'functions/news_post_functions.php';

$errors = '';
$results = '';
$success = '';

if ( isPostRequest() && count($_FILES) ) {

    try {
        // Grabs the data from the form fields
        $postTitle = filter_input(INPUT_POST, 'postTitle');
        $postWriter = filter_input(INPUT_POST, 'postWriter');
        $postContent = filter_input(INPUT_POST, 'postContent');
        // $postImageName = filter_input(INPUT_POST, 'postImageName');
        $postImageName = ($_FILES['postImageName']['name']);

        // Simple form validation
        if ( empty($postTitle || !isset($postTitle)) ) {
            $errors .= "Please fill in a Title for the news post.<br />";
        }
        if ( empty($postWriter || !isset($postWriter)) ) {
            $errors .= "Please add a Writer for the news post.<br />";
        }
        if ( empty($postContent || !isset($postContent)) ) {
            $errors .= "Please add some Content to the news post.<br />";
        }
        if ( empty($postImageName || !isset($postImageName)) ) {
            $errors .= "Please add an Image to the news post.<br />";
        }

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
        if ( $_FILES['postImageName']['size'] > 50000000 ) {      // 50 Megabytes
            throw new RuntimeException('Exceeded file size limit.');
        }

        // DO NOT TRUST $_FILES['postImageName']['mime'] VALUE !!
        // Check MIME Type by yourself.
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $validExts = array(
            'jpg' => 'image/jpeg',
//            'jpg' => 'image/jpg',
            'png' => 'image/png',
            'gif' => 'image/gif'
        );
        $ext = array_search( $finfo->file($_FILES['postImageName']['tmp_name']), $validExts, true );

        if ( false === $ext ) {
            throw new RuntimeException('Invalid file format.  Images can only be jpg, png or gif format.');
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

        // Calls function to add News Post form data to Database
        $confirm = addNewsPost($postTitle, $postWriter, $postContent, $postImageName, $ext);

        if ( $confirm === true ) {
            $results = 'News Post Added Successfully.';
        } else {
            $results = 'News Post NOT Added!';
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
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Insert News Post</title>
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
    <?php include 'includes/navbar.php'; ?>


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
                        <p class="text-danger"><?php echo $errors; ?></p>
                        <!-- Confirm whether product data was added or not -->
                        <p class="text-primary"><?php echo $results; ?></p>

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
                                <?php
//
//                                if ( count($_FILES) ) {
//
//                                    try {
//
//                                    // Undefined | Multiple Files | $_FILES Corruption Attack
//                                    // If this request falls under any of them, treat it invalid.
//                                    if ( !isset($_FILES['postImageName']['error']) or is_array($_FILES['postImageName']['error']) ) {
//                                        throw new RuntimeException('Invalid Parameters');
//                                    }
//
//                                    // Check $_FILES['postImageName']['error'] value.
//                                    switch ( $_FILES['postImageName']['error'] ) {
//                                        case UPLOAD_ERR_OK:
//                                            break;
//                                        case UPLOAD_ERR_NO_FILE:
//                                            throw new RuntimeException('No file sent.');
//                                        case UPLOAD_ERR_INI_SIZE:
//                                        case UPLOAD_ERR_FORM_SIZE:
//                                            throw new RuntimeException('Exceeded file size limit.');
//                                        default:
//                                            throw new RuntimeException('Unknown errors.');
//                                    }
//
//                                    // You should also check file size here.
//                                    if ( $_FILES['postImageName']['size'] > 50000000 ) {      // 50 Megabytes
//                                        throw new RuntimeException('Exceeded file size limit.');
//                                    }
//
//                                    // DO NOT TRUST $_FILES['postImageName']['mime'] VALUE !!
//                                    // Check MIME Type by yourself.
//                                    $finfo = new finfo(FILEINFO_MIME_TYPE);
//                                    $validExts = array(
//                                        'jpg' => 'image/jpeg',
//                                        'png' => 'image/png',
//                                        'gif' => 'image/gif'
//                                    );
//                                    $ext = array_search( $finfo->file($_FILES['postImageName']['tmp_name']), $validExts, true );
//
//
//                                    if ( false === $ext ) {
//                                        throw new RuntimeException('Invalid file format.  Images can only be jpg, png or gif format.');
//                                    }
//
//                                    // You should name it uniquely.
//                                    // DO NOT USE $_FILES['postImageName']['name'] WITHOUT ANY VALIDATION !!
//                                    // On this example, obtain safe unique name from its binary data.
//                                    $postImageName = sha1_file($_FILES['postImageName']['tmp_name']);
//                                    $location = sprintf('uploads/news_posts/%s.%s', $postImageName, $ext);
//
//                                    if ( !is_dir('uploads/news_posts') ) {
//                                        mkdir('uploads/news_posts');
//                                    }
//
//                                    if ( !move_uploaded_file($_FILES['postImageName']['tmp_name'], $location) ) {
//                                        throw new RuntimeException('Failed to move uploaded file.');
//                                    }
//
//                                    echo 'File is uploaded successfully.';
//
//                                    } catch (RuntimeException $e) {
//
//                                    echo $e->getMessage();
//                                    }
//
//                                    echo '<p>Image ' . $fileName . ' Successfully Uploaded</p>';
//                                }

                                ?>
                                <tr>
                                    <td align="left"><b>Post Image:</b></td>
                                    <td>
                                        <input type="hidden" name="size" value="50000000" />
                                        <input type="file" name="postImageName">
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
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include 'includes/js_links.php'; ?>

</body>
</html>