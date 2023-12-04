<?php

// session_start();

// if ( !isset($_SESSION['adminEmail']) ) {
//    header("Location : login.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home Page</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="../bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/admin.css" rel="stylesheet" type="text/css" />
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

                <!-- Main Admin Area -->
                <div class="col-md-9">
                    <h1 align="center">Admin Home</h1>
                    <hr />

                    <!-- Welcome message for currently logged in Admin -->
                    <p align="center" class="text-primary"> 
                        <?php 
                        if (isset($_SESSION['adminFirstName'])) {
                            echo 'Welcome' . $_SESSION['adminFirstName'] .'!';
                        }
                        ?>
                    !</p>
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->

    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINK -->
<?php include 'includes/js_links.php'; ?>

</body>
</html>
