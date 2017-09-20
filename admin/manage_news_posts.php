<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Manage News Posts</title>
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

    // Call function to display all news posts in newsposts database
    $results = viewAllNewsPosts();

    ?>

    <!-- MAIN -->
    <div class="mainContent">
        <div class="container main">
            <div class="row">

                <!-- ADMIN PANEL -->
                <?php include 'admin_panel.php'; ?>

                <!-- Main Content Area -->
                <div class="col-md-9">
                    <div class="page-header">
                        <h1>Admin Area <small class="text-primary">Manage News Posts</small></h1>
                    </div>

                    <!-- Products Table -->
                    <table border="1" class="table table-bordered table-hover table-responsive">
                        <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Post Title</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($results as $row): ?>
                            <tr>
                                <td align="center"><?php echo $row['postID']; ?></td>
                                <td align="center"><?php echo $row['postTitle']; ?></td>

                                <!-- Read, Update, Delete Buttons -->
                                <td align="center"><a href="view_news_post.php?postID=<?php echo $row['postID']; ?>" class="btn btn-primary">View Post</a></td>
                                <td align="center"><a href="update_news_post.php?postID=<?php echo $row['postID']; ?>" class="btn btn-success">Update Post</a></td>
                                <td align="center"><a href="delete_news_post.php?postID=<?php echo $row['postID']; ?>" class="btn btn-danger">Delete Post</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

                </div><!-- /.col-md-9 -->

            </div><!-- /.row -->
        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
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