<!DOCTYPE html>
<?php

include("functions/functions.php");
include("includes/dbconnect.php");
include("includes/db.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>User Registration</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
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
                <a class="navbar-brand page-title navbar-btn" href="index.php">THE STOOP</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- About Us Button -->
                    <li class="navbar-btn"><a href="aboutus.php">ABOUT</a></li>
                    <!-- Gallery Button -->
                    <li class="navbar-btn"><a href="gallery.php">GALLERY</a></li>
                    <!-- News Button -->
                    <li class="navbar-btn"><a href="news.php">NEWS</a></li>
                    <!-- Shop Button -->
                    <li class="navbar-btn"><a href="shop.php">SHOP</a></li>
                    <!-- Contact Us Button -->
                    <li class="navbar-btn"><a href="contact.php">CONTACT</a></li>
                    <!-- Admin Button -->
                    <li class="dropdown navbar-btn">
                        <a href="admin/admin.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="admin/admin.php">Admin Home Page</a></li>
                            <li><a href="#">Create New Admin</a></li>
                            <li><a href="#">Manage About Us Page</a></li>
                            <li><a href="#">Manage News Posts</a></li>
                            <li><a href="#">Update Shop Products</a></li>
                            <li><a href="#">View Product Requests</a></li>
                        </ul>
                    </li>
                    <!-- Social Media Icons -->
                    <li class="navbar-btn"><a href="https://www.facebook.com/thestoopri/"><span class="fa fa-facebook"></span></a></li>
                    <li class="navbar-btn"><a href="https://www.instagram.com/stoopglass/"><span class="fa fa-instagram"></span></a></li>
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
                    <li class="navbar-btn active"><a href="customer_register.php">Sign Up <span class="sr-only">(current)</span> </a></li>
                    <!-- Login Button -->
                    <li class="navbar-btn"><a href="login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <form action="customer_register.php" method="post" enctype="multipart/form-data">

        <table align="center" width="750">

            <tr align="center">
                <td colspan="6"><h2>Create an Account</h2></td>
            </tr>

            <tr>
                <td align="right">Customer User Name:</td>
                <td><input type="text" name="userName" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Email:</td>
                <td><input type="text" name="userEmail" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Password:</td>
                <td><input type="password" name="userPassword" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Address:</td>
                <td><input type="text" name="userStreetAddress" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Address 2:</td>
                <td><input type="text" name="userStreetAddress2" /></td>
            </tr>

            <tr>
                <td align="right">Customer City:</td>
                <td><input type="text" name="userCity" required /></td>
            </tr>

            <tr>
                <td align="right">Customer State:</td>
                <td>
                    <select name="userState" required>
                        <option>Select a State</option>
                        <option>CT</option>
                        <option>MA</option>
                        <option>ME</option>
                        <option>NH</option>
                        <option>NJ</option>
                        <option>NY</option>
                        <option>RI</option>
                        <option>VT</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="right">Customer Zip:</td>
                <td><input type="text" name="userZip" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Country:</td>
                <td><input type="text" name="userCountry" required /></td>
            </tr>

            <tr>
                <td align="right">Customer Phone:</td>
                <td><input type="tel" name="userPhone" required /></td>
            </tr>

            <tr align="center">
                <td colspan="6"><input type="submit" name="register" value="Create Account"</td>
            </tr>
        </table>

    </form>

    <?php include("templates/footer.php"); ?>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    if (isset($_POST['register'])) {

        $ip = getIp();

        $userFirstName = $_POST['userFirstName'];
        $userLastName = $_POST['userLastName'];
        $userName = $_POST['userName'];
        $userEmail = $_POST['userEmail'];
        $userPassword = $_POST['userPassword'];
        $userStreetAddress = $_POST['userStreetAddress'];
        $userStreetAddress2 = $_POST['userStreetAddress2'];
        $userCity = $_POST['userCity'];
        $userState = $_POST['userState'];
        $userZip = $_POST['userZip'];
        $userCountry = $_POST['userCountry'];
        $userPhone = $_POST['userPhone'];

        echo $insert_user = "INSERT into users (userIP, userFirstName, userLastName, userName, userEmail, userPassword, userStreetAddress, userStreetAddress2, userCity, userState, userZip, userCountry, userPhone) VALUES ('$ip','$userFirstName', '$userLastName', '$userName', '$userEmail', '$userPassword', '$userStreetAddress', '$userStreetAddress2', '$userCity', '$userState', '$userZip', '$userCountry', '$userPhone')";

        $run_c = mysqli_query($con, $insert_c);

        if ($run_c) {
            echo "<script>alert('registration successful!');</script>";
        }
    }

?>