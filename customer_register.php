<!DOCTYPE html>
<?php
//session_start();
include 'functions/functions.php';
include 'includes/dbconnect.php';
include 'includes/db.php';
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
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
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
        <form action="customer_register.php" method="POST" enctype="multipart/form-data">
            <!-- First & Last Name Row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>First Name:</label>
                        <input type="text" class="form-control" name="userFirstName" required autofocus maxlength="50" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Last Name:</label>
                        <input type="text" class="form-control" name="userLastName" required maxlength="50" />
                    </div>
                </div>
            </div>
            <!-- Username Row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" class="form-control" name="userName" required maxlength="50" />
                    </div>
                </div>
            </div>
            <!-- Password Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Password:</label>
                        <input type="password" class="form-control" name="userPassword" required maxlength="100" />
                    </div>
                </div>
            </div>
            <!-- Email Address Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" name="userEmail" required maxlength="100" />
                    </div>
                </div>
            </div>
            <!-- Street Address Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Street Address:</label>
                        <input type="text" class="form-control" name="userStreetAddress" required maxlength="100" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Street Address 2:</label>
                        <input type="text" class="form-control" name="userStreetAddress2" maxlength="100" />
                    </div>
                </div>
            </div>
            <!-- City, State, Zip Code Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" class="form-control" name="userCity" required maxlength="50" />
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>State:</label>
                        <select class="form-control" name="userState" required maxlength="2">
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
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Zip Code:</label>
                        <input type="text" class="form-control" name="userZip" required maxlength="5" />
                    </div>
                </div>
            </div>
            <!-- Country Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Country:</label>
                        <input type="text" class="form-control" name="userCountry" required maxlength="50" />
                    </div>
                </div>
            </div>
            <!-- Country Row -->
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" name="userPhone" required maxlength="10" />
                    </div>
                </div>
            </div>
            <!-- Create Account Button -->
            <div class="row">
                <div class="col-lg-offset-10">
                    <div class="form-group">
                        <button type="submit" class="btn btn-warning" name="register" id="btn-register" style="color: black;">
                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                        </button>
                    </div>
                </div>
            </div>

        </form>
    </div>

    <!-- FOOTER -->
    <?php include "templates/footer.php"; ?>

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

        $userFirstName = $_POST['userFirstName'];
        $userLastName = $_POST['userLastName'];
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        $userEmail = $_POST['userEmail'];
        $userStreetAddress = $_POST['userStreetAddress'];
        $userStreetAddress2 = $_POST['userStreetAddress2'];
        $userCity = $_POST['userCity'];
        $userState = $_POST['userState'];
        $userZip = $_POST['userZip'];
        $userCountry = $_POST['userCountry'];
        $userPhone = $_POST['userPhone'];

        $password = md5($userPassword);

        $insert_user = "INSERT INTO users (userFirstName, userLastName, userName, userPassword, userEmail, userStreetAddress, userStreetAddress2, userCity, userState, userZip, userCountry, userPhone) VALUES ('$userFirstName', '$userLastName', '$userName', '$password', '$userEmail', '$userStreetAddress', '$userStreetAddress2', '$userCity', '$userState', '$userZip', '$userCountry', '$userPhone')";

        $run_user = mysqli_query($con, $insert_user);

        if ($run_user) {
            echo "<script>alert('registration successful!');</script>";
        } else {
            echo "<script>alert('registration failed!  Please try again.);</script>";
        }
    }

?>