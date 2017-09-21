<?php

//session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News from The Stoop</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto|Lato" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
<!--    <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" />-->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Normalize CSS -->
    <link href="bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
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
                    <li class="navbar-btn active"><a href="news.php">NEWS <span class="sr-only">(current)</span> </a></li>
                    <!-- Shop Button -->
                    <li class="navbar-btn"><a href="shop.php">SHOP</a></li>
                    <!-- Contact Us Button -->
                    <li class="navbar-btn"><a href="contact.php">CONTACT</a></li>

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


    <?php

    include 'includes/dbconnect.php';
    include 'functions/functions.php';

    $results = viewAllNewsPosts();

    ?>


    <!-- MAIN CONTENT -->
    <div class="mainContent">
        <div class="container main">

            <!-- Page Title -->
            <h2>News</h2>
            <hr />

            <!-- Columns are always 50% wide, on mobile and desktop -->
            <div class="row">
                <div class="container">

                    <?php foreach ($results as $row): ?>
                    <!-- News Post -->
                    <div class="media">
                            <div class="media-left media-top">
                                <a href="#">
                                    <img class="media-object" src="/admin/uploads/news_posts/<?php echo $row['postImageName']; ?>" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $row['postTitle']; ?></h4>
                                <p>Author: <?php echo $row['postWriter']; ?></p>
                                <small>Date: <?php echo $row['postDate']; ?></small>
                                <p><?php echo $row['postContent']; ?></p>
                            </div>
                    </div><!-- /.media -->

                    <?php endforeach; ?>

                </div><!-- /.container -->
            </div><!-- /.row -->

            <div class="media">
                <div class="media-left media-top">
                    <a href="#">
                        <img class="media-object" src="<?php echo $row['postImageName']; ?>" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $row['postTitle']; ?></h4>
                    <p>Author: <?php echo $row['postWriter']; ?></p>
                    <small>Date: <?php echo $row['postDate']; ?></small>
                    <p><?php echo $row['postContent']; ?></p>
                </div>
            </div>

        </div><!-- /.container.main -->
    </div><!-- /.mainContent -->
    <!-- END OF MAIN CONTENT -->


    <!-- FOOTER -->
    <?php include 'includes/footer.php'; ?>

    <!-- JS LINKS -->
    <?php include 'includes/js_links.php'; ?>

</body>
</html>