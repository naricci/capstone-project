<?php

session_start();

include 'includes/dbconnect.php';
include 'includes/db.php';

// Declared Variables
$errors = '';
$success = '';

if ( isset($_POST['login']) ) {

    $adminEmail = $_POST['adminEmail'];
    $adminPassword = $_POST['adminPassword'];

    if ( empty($adminEmail) ) {
        $errors .= 'Please fill in your Email Address.<br />';
    }
    if ( empty($adminPassword) ) {
        $errors .= 'Please fill in your Password.<br />';
    }

    if ( $adminEmail != '' and $adminPassword != '' and !empty($adminEmail) and !empty($adminPassword) ) {

        // $con = mysqli_connect("localhost", "root", "", "thestoop");  // db connection included in db.php file above...

        // Check to make sure email has not be used yet
        $check = mysqli_query($con, "SELECT * FROM admin WHERE adminEmail='$adminEmail' and adminPassword='$adminPassword'");   //  and userActivated='1' needs to be added after mail function is fixed

        //$select_user = "SELECT * FROM users WHERE userPassword = '$userPassword' AND userEmail = '$userEmail'";

        // $query = mysqli_query($con, $select_user);

        if ( mysqli_num_rows($check) >= 1 ) {

//            $data = mysqli_fetch_array($query);

            $adminData = mysqli_fetch_array($check);
            $_SESSION['adminID'] = $adminData['adminID'];
            $_SESSION['adminEmail'] = $adminData['adminEmail'];
            $_SESSION['adminFirstName'] = $adminData['adminFirstName'];
            $_SESSION['adminLastName'] = $adminData['adminLastName'];

            header("Location: index.php");

        } else {

            $errors .= 'Either your credentials do not match or you need to verify your email address.';
            // echo "Sorry, the email you provided does not match any user accounts in our database.";

        }

        //echo "User has logged in successfully.";
    } //else {

    //echo "Error:  Please fill in correct email and password in order to log in.";
    //}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Home Page</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
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
    <?php include 'templates/navbar.php'; ?>


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">
            <div class="row">

                <!-- ADMIN PANEL -->
                <?php include 'admin_panel.php'; ?>

                <!-- Main Admin Area -->
                <div class="col-md-9">
<!--                    <h1 align="center">Admin Home <small class="text-primary">Log In</small></h1>-->
<!--                    <hr />-->

                    <!-- Welcome message for currently logged in Admin -->
<!--                    <p align="center" class="text-primary">Welcome <small class="text-primary">--><?php ////$SESSION['adminFirstName']; ?><!--</small>!</p>-->

                    <!-- Login Form -->
                    <fieldset>
                        <legend>Admin Log In <small class="text-primary"> Welcome <?php //$SESSION['adminFirstName']; ?></small>!</legend>

                        <?php

                        echo $errors;
                        echo $success;

                        ?>

                        <form action="#" method="post">

                            <!-- Email Row-->
                            <div class="row">
                                <div class="col-md-offset-4 col-md-4">
                                    <div class="form-group">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" name="adminEmail" value="<?=((isset($adminEmail))?$adminEmail:'')?>" required maxlength="255" autofocus />
                                    </div>
                                </div>
                            </div>

                            <!-- Password Row-->
                            <div class="row">
                                <div class="col-md-offset-4 col-md-4">
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" class="form-control" name="adminPassword" value="<?=((isset($adminPassword))?$adminPassword:'')?>" required maxlength="60" />
                                    </div>
                                </div>
                            </div>

                            <!-- Login Button-->
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 style="float:right; padding-right:20px;"><a href="create_new_admin.php" style="text-decoration:none; font-size: 14px;">Create New Admin?</a></h3>
                                </div>
                                <div class="col-md-offset-7">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="login" id="btn-register">
                                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Log In
                                        </button>
                                    </div>
                                </div>
                            </div>

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
