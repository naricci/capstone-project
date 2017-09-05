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

    <!-- MAIN CONTENT -->
    <div class="container mainContent">
        <!-- Page Title -->
        <h2>Create an Account</h2>
        <hr />

        <!-- Registration Form -->
        <form class="form-signin" action="customer_register.php" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="userName" required />
            </div>

            <div class="form-group">
                <label>Email Address:</label>
                <input type="text" class="form-control" name="userEmail" required />
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="userPassword" required />
            </div>

            <div class="form-group">
                <label>Street Address:</label>
                <input type="text" class="form-control" name="userStreetAddress" required />
                <br />
                <input type="text" class="form-control" name="userStreetAddress2" />
            </div>

            <div class="form-group">
                <label>City:</label>
                <input type="text" class="form-control" name="userCity" required />
            </div>

            <div class="form-group">
                <label>State:</label>
                <select class="form-control" name="userState" required>
                    <option>Select a State</option>
                    <option value="AK">AK</option>
                    <option value="AL">AL</option>
                    <option value="AR">AR</option>
                    <option value="AZ">AZ</option>
                    <option value="CA">CA</option>
                    <option value="CO">CO</option>
                    <option value="CT">CT</option>
                    <option value="DC">DC</option>
                    <option value="DE">DE</option>
                    <option value="FL">FL</option>
                    <option value="GA">GA</option>
                    <option value="HI">HI</option>
                    <option value="IA">IA</option>
                    <option value="ID">ID</option>
                    <option value="IL">IL</option>
                    <option value="IN">IN</option>
                    <option value="KS">KS</option>
                    <option value="KY">KY</option>
                    <option value="LA">LA</option>
                    <option value="MA">MA</option>
                    <option value="MD">MD</option>
                    <option value="ME">ME</option>
                    <option value="MI">MI</option>
                    <option value="MN">MN</option>
                    <option value="MO">MO</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="NC">NC</option>
                    <option value="ND">ND</option>
                    <option value="NE">NE</option>
                    <option value="NH">NH</option>
                    <option value="NJ">NJ</option>
                    <option value="NM">NM</option>
                    <option value="NV">NV</option>
                    <option value="NY">NY</option>
                    <option value="OH">OH</option>
                    <option value="OK">OK</option>
                    <option value="OR">OR</option>
                    <option value="PA">PA</option>
                    <option value="PR">PR</option>
                    <option value="RI">RI</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                    <option value="TN">TN</option>
                    <option value="TX">TX</option>
                    <option value="UT">UT</option>
                    <option value="VA">VA</option>
                    <option value="VT">VT</option>
                    <option value="WA">WA</option>
                    <option value="WI">WI</option>
                    <option value="WV">WV</option>
                    <option value="WY">WY</option>
                </select>
            </div>

            <div class="form-group">
                <label>Zip Code:</label>
                <input type="text" class="form-control" name="userZip" required />
            </div>

            <div class="form-group">
                <label>Country:</label>
                <input type="text" class="form-control" name="userCountry" required />
            </div>

            <div class="form-group">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" name="userPhone" required />
            </div>

            <div class="form-group">
<!--            <input type="submit" class="form-control btn btn-default" name="register" value="Create Account" />-->
                <button type="submit" class="btn btn-warning" name="register" id="btn-register">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                </button>
            </div>

        </form>
    </div>

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