<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Delete Product</title>
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
    <?php include 'templates/navbar.php'; ?>

    <?php

    include 'includes/dbconnect.php';
    include 'functions/functions.php';

    $productID = filter_input(INPUT_GET, 'productID');

    $isDeleted = deleteProduct($productID);
    ?>

    <!-- MAIN -->
    <div class="container mainContent">
        <div class="row">

            <!-- ADMIN PANEL -->
            <?php include 'templates/admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">

                <h1 align="center">Product <?php echo $productID; ?>
                    <?php if ( !$isDeleted ): ?>
                        NOT
                    <?php endif; ?>
                    Deleted.</h1>
            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->
    </div> <!-- /.container .mainContent -->
    <!-- END OF MAIN -->

    <!-- FOOTER -->
    <?php include '../templates/footer.php' ?>

</body>
</html>
