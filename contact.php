<?php

session_start();

$feedback = '';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="css/contactus.css" rel="stylesheet" type="text/css" />
<!--    <link href="css/login.css" rel="stylesheet" type="text/css" />-->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">

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

                    <!-- Social Media Icons -->
                    <li class="navbar-btn"><a href="https://www.facebook.com/thestoopri/"><span class="fa fa-facebook"></span></a></li>
                    <li class="navbar-btn"><a href="https://www.instagram.com/stoopglass/"><span class="fa fa-instagram"></span></a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php

                    if ( !isset($_SESSION['userEmail']) ) {
                        echo "<!-- Sign Up Button -->
<li class='navbar-btn'><a class='login-btn' href='signup.php'>Sign Up</a></li>
<!-- Log In Button -->
<li class='navbar-btn'><a class='login-btn' href='login.php'>Log In</a></li>";
                    } else {
                        echo "<!-- Log Out Button -->
<li class='navbar-btn'><a class='login-btn' href='logout.php'>Log Out</a></li>";
                    }

                    ?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>
    <!-- END OF NAVBAR -->


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">

            <!-- Page Title -->
            <h2>Contact</h2>
            <hr />

            <!-- Columns are always 50% wide, on mobile and desktop -->
            <div class="row">
                <!-- Contact Form Div-->
                <div class="col-md-4">

                    <p></p>
                    <div>Fields marked with <span class="required_star"> * </span> are mandatory.</div>
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
                            <input class="btn btn-primary" type="submit" name="submit" value="Send Message" />
                    </form>
                </div><!-- /.col-md-4 -->

                <!-- Photo on the right -->
                <div class="col-md-8">
                    <img src="images/store/IMG_6651.JPG" alt="Bong on stairs" class="img-responsive img-thumbnail">
                    <br />
                    <img src="images/store/IMG_6656.JPG" alt="Jars in a case" class="img-responsive img-thumbnail">
                </div><!-- /.col-md-8 -->

            </div><!-- /.row -->
        </div><!-- /.container.main -->

    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include "includes/js_links.php"; ?>

</body>
</html>

<?php

$to = 'mr.naricci13@yahoo.com';
$subject = 'The Stoop Contact Us Request';

$name = $_POST['name'];
//$name = filter_input($_POST, 'name');
$email = $_POST['email'];
//$email = filter_input($_POST, 'email');
$message = $_POST['message'];
//$message = filter_input($_POST, 'message');
$header = 'Message from...';

$body = <<<EMAIL

Hi ! My name is $name.

$message

From $name
Email:  $email

EMAIL;

$header = "From: $email";

if ( isset($_POST['submit']) ) {
    if ( $name == '' || $email == '' || $message == '' ) {
        $feedback = 'Please fill out ALL fields.';
    } else {
        mail($to, $subject, $body, $header);
        $feedback = 'Your message has been sent.';
    }
}
?>