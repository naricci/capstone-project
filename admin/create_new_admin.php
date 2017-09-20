<?php

// session_start();

include 'includes/dbconnect.php';
include 'includes/db.php';

// Variables
$errors = '';
$success = '';

if ( isset($_POST['register']) ) {

    $adminEmail = $_POST['adminEmail'];
    $adminPassword = $_POST['adminPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $adminFirstName = $_POST['adminFirstName'];
    $adminLastName = $_POST['adminLastName'];
    $adminStreetAddress = $_POST['adminStreetAddress'];
    $adminStreetAddress2 = $_POST['adminStreetAddress2'];
    $adminCity = $_POST['adminCity'];
    $adminState = $_POST['adminState'];
    $adminZip = $_POST['adminZip'];
    $adminPhone = $_POST['adminPhone'];

    // Encrypt User's Password
    $password = sha1($adminPassword);

    // Validation check to make sure registration form fields are not empty
    // Add error message to array if errors are found
    if ( empty($adminEmail) ) {
        $errors .= 'Please fill in your Email Address.<br />';
    }
    if ( empty($adminPassword) ) {
        $errors .= 'Please fill in your Password.<br />';
    }
    if ( empty($confirmPassword) ) {
        $errors .= 'Please confirm your Password.<br />';
    }
    if ( empty($adminFirstName) ) {
        $errors .= 'Please fill in your First Name.<br />';
    }
    if ( empty($adminLastName) ) {
        $errors .= 'Please fill in your Last Name.<br />';
    }
    if ( empty($adminStreetAddress) ) {
        $errors .= 'Please fill in your Street Address.<br />';
    }
    if ( empty($adminCity) ) {
        $errors .= 'Please fill in your City.<br />';
    }
    if ( empty($adminState) ) {
        $errors .= 'Please select a State.<br />';
    }
    if ( empty($adminZip) ) {
        $errors .= 'Please fill in your Zip Code.<br />';
    }
    if ( empty($adminPhone) ) {
        $errors .= 'Please fill in your Phone Number.<br />';
    }

    // Check to make sure both Passwords match
    if ( $confirmPassword != $adminPassword ) {

        echo "Error!  Both password fields MUST match.  Please try again.";

    } else {

        //$con = mysqli_connect("localhost", "root", "", "thestoop");   // Included in db.php file above...

        // Check to make sure the submitted email has not be used yet
        $check = mysqli_query($con, "SELECT * FROM admin WHERE adminEmail='$adminEmail'");

        if ( mysqli_num_rows($check) >= 1 ) {

            $errors .= "The Email Address you entered already has an account with us.  Please use another Email Address.<br />";

        } else {

            $token = sha1($adminFirstName);

            $insert_query = "INSERT INTO admin (adminEmail, adminPassword, adminFirstName, adminLastName, adminStreetAddress, adminStreetAddress2, adminCity, adminState, adminZip, adminPhone, adminDateJoined, adminToken) VALUES ('$adminEmail', '$password', '$adminFirstName', '$adminLastName', '$adminStreetAddress', '$adminStreetAddress2', '$adminCity', '$adminState', '$adminZip', '$adminPhone', NOW(), '$token')";

            // This will send an email to the user's email address used to sign up for an account
            $to = "$adminEmail";
            $subject = 'The Stoop:  Please verify your email address.';
            $message = 'Greetings from The Stoop!  Please click on this link in order to verify your account.';

            // Link in email used to activate user account
            $message .= '<a href="http://localhost/activate.php?token='.$token.'">Click Here</a>';

            $headers = "From: test@gmail.com\n";
            $headers .= "MIME-Version: 1.0\n";
            $headers .= "Content-type: text/html; charset=iso-8859-1\n";

            mail($to, $subject, $message, $headers);

            if ( mysqli_query($con, $insert_query) ) {

                $success = 'Successfully created account!';
                $name = '';
                $email = '';
                $password = '';

                // Display Success Alert
                echo "<script>alert('Administrator account created successfully!');</script>";

                // If registration is successful send user to the login page
                header("Location: login.php");

            } else {

                // Display Failed Alert
                echo "<script>alert('Creating a new administrator has failed!  Please try again.);</script>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Admin Account</title>
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


    <!-- MAIN CONTENT AREA -->
    <div class="mainContent">
        <div class="container main">
            <div class="row">

                <!-- ADMIN PANEL -->
                <?php include 'admin_panel.php'; ?>

                <!-- Main Admin Area -->
                <div class="col-md-9">

                    <!-- Create New Admin Form -->
                    <fieldset>

                        <legend>Create New Admin <small class="text-primary"> Welcome <?php //$SESSION['adminFirstName']; ?>!</small></legend>

                        <?php

                        // Displays either error message or success message after registration attempt
                        echo $errors;
                        echo $success;

                        ?>

                        <!-- Registration Form -->
                        <form action="create_new_admin.php" method="post" enctype="multipart/form-data">

                            <!-- Email Address Row -->
                            <div class="row">

                                <!-- Email -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email Address:</label>
                                        <input type="email" class="form-control" name="adminEmail" value="<?=((isset($adminEmail))?$adminEmail:'')?>" required maxlength="100" autofocus />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- Password Row -->
                            <div class="row">

                                <!-- Password -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Password:</label>
                                        <input type="password" class="form-control" name="adminPassword" value="<?=((isset($adminPassword))?$adminPassword:'')?>" required maxlength="100" />
                                    </div>
                                </div>

                                <!-- Confirm Password -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Password:</label>
                                        <input type="password" class="form-control" name="confirmPassword" value="<?=((isset($confirmPassword))?$confirmPassword:'')?>" required maxlength="100" />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- First & Last Name Row-->
                            <div class="row">

                                <!-- First Name -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>First Name:</label>
                                        <input type="text" class="form-control" name="adminFirstName" value="<?=((isset($adminFirstName))?$adminFirstName:'')?>" required maxlength="50" />
                                    </div>
                                </div>

                                <!-- Last Name -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Last Name:</label>
                                        <input type="text" class="form-control" name="adminLastName" value="<?=((isset($adminLastName))?$adminLastName:'')?>" required maxlength="50" />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- Street Address Row -->
                            <div class="row">

                                <!-- Street Address 1 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Street Address:</label>
                                        <input type="text" class="form-control" name="adminStreetAddress" value="<?=((isset($adminStreetAddress))?$adminStreetAddress:'')?>" required maxlength="100" />
                                    </div>
                                </div>

                                <!-- Street Address 2 -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Street Address 2:</label>
                                        <input type="text" class="form-control" name="adminStreetAddress2" value="<?=((isset($adminStreetAddress2))?$adminStreetAddress2:'')?>" maxlength="100" />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- City, State, Zip Code Row -->
                            <div class="row">

                                <!-- City -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>City:</label>
                                        <input type="text" class="form-control" name="adminCity" value="<?=((isset($adminCity))?$adminCity:'')?>" required maxlength="50" />
                                    </div>
                                </div>

                                <!-- State -->
                                <div class="col-md-4">
                                    <div class="form-group">

                                        <label>State:</label>
                                        <select class="form-control" name="adminState" value="<?=((isset($adminState))?$adminState:'')?>" required>
                                            <option selected>Select a State</option>
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

                                <!-- Zip Code -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Zip Code:</label>
                                        <input type="text" class="form-control" name="adminZip" value="<?=((isset($adminZip))?$adminZip:'')?>" required maxlength="5" />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- Phone Row -->
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone Number:</label>
                                        <input type="tel" class="form-control" name="adminPhone" value="<?=((isset($adminPhone))?$adminPhone:'')?>" required maxlength="10" />
                                    </div>
                                </div>

                            </div><!-- /.row -->

                            <!-- Create Account Button -->
                            <div class="row">

                                <div class="col-lg-offset-10">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="register" id="btn-register">
                                            <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                                        </button>
                                    </div>
                                </div>

                            </div><!-- /.row -->

                        </form>

                    </fieldset>

                </div><!-- /.col-md-9 -->

            </div><!-- /.row -->
        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT AREA -->


    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>
</body>
</html>
