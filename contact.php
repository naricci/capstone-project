<?php

$to = 'nicholasaricci@gmail.com';
$subject = 'this came from your mother';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//$header = 'Message from...';

$body = <<<EMAIL

Hi ! My name is $name.

$message

From $name
Email:  $email

EMAIL;

$header = "From: $email";

if ($_POST) {
    if ($name == '' || $email == '' || $message == '') {
        $feedback = 'Please fill out ALL fields.';
    } else {
        mail($to, $subject, $body, $header);
        $feedback = 'Your message has been sent.';
    }
}

?>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/contactus.css" rel="stylesheet" type="text/css" />
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
                    <li class="navbar-btn active"><a href="contact.php">CONTACT <span class="sr-only">(current)</span></a></li>
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
                    <li class="navbar-btn"><a href="customer_register.php">Sign Up</a></li>
                    <!-- Login Button -->
                    <li class="navbar-btn"><a href="login.php">Login</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!-- Main Content -->
    <div class="container mainContent">

        <!-- Page Title -->
        <h2>Contact</h2>
        <hr />
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <!-- Contact Form Div-->
            <div class="col-md-4">
				
				<h4 class="freecontactformheader"><b>Contact Us Form</b></h4>
	  
	 			<div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
				<br />
                <p id="feedback"><?php echo $feedback; ?></p>
				<!-- Contact Form -->
                <form action="?" method="post"> <!-- id="contactus-form" onsubmit="return validate.check(this)" -->
                    <div class="form-group">
                        <label for="name" class="required">Full Name<span class="required_star"> * </span></label>
                        <input type="text" class="form-control" id="name"  name="name" placeholder="Please enter your Full Name" maxlength="100" required />
                    </div>
<!--                    <div class="form-group">-->
<!--                        <label for="phone">Phone Number</label>-->
<!--                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Please enter your Phone Number" maxlength="10" />-->
<!--                    </div>-->
                    <div class="form-group">
                        <label for="email" class="required">Email Address<span class="required_star"> * </span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Please enter your Email Address" maxlength="100" required />
                    </div>
                    <div class="form-group">
                        <label for="message" class="required">Message<span class="required_star"> * </span></label>
                        <textarea type="text" style="height: 100px;" class="form-control" id="message" name="message" placeholder="Please enter your comments here..." required></textarea>
                    </div>
<!--					<div class="form-group antispammessage">-->
<!--	  					To help prevent automated spam, please answer this question-->
<!--	  					<br /><br />-->
<!--				  		<div class="antispamquestion">-->
<!--				   			<span class="required_star"> * </span>-->
<!--				   			Using only numbers, what is 13 plus 7? &nbsp; -->
<!--				   			<input type="text" name="antispam" id="antispam" maxlength="2000" style="width:30px" required />-->
<!--				  		</div>-->
<!--					</div>-->
					<br />
<!--                    <button type="submit" class="btn btn-danger">Send Message</button>-->
<!--                        <input type="hidden" name="submit" />-->
                        <input class="btn btn-danger" type="submit" name="submit" value="Send Message" />
                </form>
            </div>

            <!-- Photo on the right -->
            <div class="col-md-8">
                <img src="images/store/IMG_6651.JPG" alt="Bong on stairs" class="img-responsive img-thumbnail">
                <br />
                <img src="images/store/IMG_6656.JPG" alt="Jars in a case" class="img-responsive img-thumbnail">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php include 'templates/footer.php'; ?>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>