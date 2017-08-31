<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Us</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/contactus.css" rel="stylesheet" type="text/css" />
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- NAVBAR -->
    <?php include "../templates/navbar.php"; ?>

    <!-- Main Content -->
    <div class="container mainContent">

        <h1>Contact</h1>
        <hr />
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <!-- Contact Form -->
            <div class="col-xs-12 col-lg-6">
                <form action="#">
                    <div class="form-group">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First Name" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last Name" maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Phone Number" maxlength="10">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Email Address" maxlength="100">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" height="100px" class="form-control" id="message"></textarea>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

            <!-- Photo on the right -->
            <div class="col-xs-12 col-lg-6">
                <img src="../img/store/IMG_6651.JPG" alt="Bong on stairs" class="img-responsive">
                <br />
                <img src="../img/store/IMG_6656.JPG" alt="Jars in a case" class="img-responsive">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include "../templates/footer.php"; ?>

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="../../bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>