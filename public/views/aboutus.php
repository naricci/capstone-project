<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>About Us</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Bootstrap CSS -->
    <link href="../../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- NAVBAR -->
    <?php include "../templates/navbar.php"; ?>

    <!-- Main Content -->
    <div class="container mainContent">

        <!-- Page Title -->
        <h1>About Us</h1>
        <hr />    
        
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row">
            <div class="col-lg-8 col-xs-12">
                <h5>Location</h5>
                <!-- Google Maps Embed API -->
                <iframe 
                    width="600" 
                    height="450" 
                    frameborder="0" 
                    style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJky8uOsZM5IkRKw4YnDItgyY&key=AIzaSyBvKyn-4z0hzjG5rwrvJiQeoW6cQPFyDuI" allowfullscreen>
                </iframe>
            </div>

            <div class="col-lg-2 col-xs-12">
                <h5>Hours of Operation</h5>
                <p>Monday - Thursday 10am - 8pm</p>
                <p>Friday - Saturday 10am - 10pm</p>
                <p>Sunday 12am - 6pm</p>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

    <?php include "../templates/footer.php"; ?>

    <!-- jQuery -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Popper.js -->
    <script src="../../bower_components/popper.js/dist/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>