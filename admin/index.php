<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Home Page</title>
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

    <!-- Main Content -->
    <div class="container mainContent">
        <div class="row">

            <!-- Admin Panel -->
            <?php include 'admin_panel.php'; ?>

            <!-- Main Content Area -->
            <div class="col-md-9">
                <h1 align="center">Admin Home</h1>
                <hr />

                <p>Welcome!</p>
            </div><!-- /.col-md-9 -->

        </div><!-- /.row -->
    </div><!-- /.container .mainContent -->
    <!-- End of Main Content -->

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
