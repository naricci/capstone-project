<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form using jQuery Ajax and PHP MySQL</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

<?php include_once "templates/navbar.php"; ?>

<div class="signin-form">

    <div class="container">


        <form class="form-signin" method="post" id="register-form">

            <h2 class="form-signin-heading">Sign Up</h2><hr />

            <div id="error">
                <!-- error will be shown here ! -->
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="First Name" name="userFirstName" id="userFirstName" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Last Name" name="userLastName" id="userLastName" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" name="userName" id="userName" />
            </div>

            <div class="form-group">
                <input type="tel" class="form-control" placeholder="Phone" name="userPhone" id="userPhone" />
            </div>

            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email address" name="userEmail" id="user_email" />
                <span id="check-e"></span>
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="userPassword" id="password" />
            </div>

            <div class="form-group">
                <input type="password" class="form-control" placeholder="Retype Password" name="cUserPassword" id="cpassword" />
            </div>
            <hr />

            <div class="form-group">
                <input type="date" class="form-control" placeholder="Birthday" name="userDOB" id="userDOB" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Street Address" name="userStreetAddress" id="userStreetAddress" />
            </div>

            <div class="form-group">
                <input type="" class="form-control" placeholder="Street Address 2" name="userStreetAddress2" id="userStreetAddress2" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="City" name="userCity" id="userCity" />
            </div>

            <div class="form-group">
                <label for="state" class="col-sm-2 control-label">State</label>
                <select class="form-control" id="userState" name="userState">
                    <option value="">N/A</option>
                    <option value="AK">Alaska</option>
                    <option value="AL">Alabama</option>
                    <option value="AR">Arkansas</option>
                    <option value="AZ">Arizona</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DC">District of Columbia</option>
                    <option value="DE">Delaware</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="IA">Iowa</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MD">Maryland</option>
                    <option value="ME">Maine</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MO">Missouri</option>
                    <option value="MS">Mississippi</option>
                    <option value="MT">Montana</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="NE">Nebraska</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NV">Nevada</option>
                    <option value="NY">New York</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VA">Virginia</option>
                    <option value="VT">Vermont</option>
                    <option value="WA">Washington</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WV">West Virginia</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Zip" name="userZip" id="userZip" />
            </div>

            <div class="form-group">
                <input type="text" class="form-control" placeholder="Country" name="userCountry" id="userCountry" />
            </div>
            <hr />

            <div class="form-group">
                <button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">
                    <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
                </button>
            </div>

        </form>

    </div>

</div>

<?php include_once "templates/footer.php"; ?>

<!-- jQuery -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- JavaScript -->
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- Bootstrap JS -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>