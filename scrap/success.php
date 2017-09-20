<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registration Form using jQuery Ajax and PHP MySQL</title>
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Roboto" rel="stylesheet" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet" media="screen" />
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <!-- Normalize CSS -->
    <link href="../bower_components/normalize-css/normalize.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet" media="screen" />
    <link href="../css/main.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- jQuery -->
    <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- JavaScript -->
    <script type="text/javascript" src="validation.min.js"></script>
    <script type="text/javascript">
        $('document').ready(function()
        {
            window.setTimeout(function(){

                window.location.href = "../index.php";

            }, 6000);


            $("#back").click(function(){
                window.location.href = "../index.php";
            });
        });
    </script>
    <!-- Bootstrap JS -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.codingcage.com/" target="_blank" title="Coding Cage Programming Blog">Coding Cage</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="http://www.codingcage.com/2015/11/ajax-registration-script-using-jquery-php.html">Go to Article</a></li>
                    <li><a href="http://www.codingcage.com/p/about.html" target="_blank">About</a></li>
                    <li><a href="http://www.codingcage.com/p/contact-me.html" target="_blank">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Tutorials <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://www.codingcage.com/search/label/jQuery" target="_blank">jQuery</a></li>
                            <li><a href="http://www.codingcage.com/search/label/Ajax" target="_blank">Ajax</a></li>
                            <li><a href="#">MySQLI</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">PHP</li>
                            <li><a href="http://www.codingcage.com/search/label/PHP OOP" target="_blank">PHP OOP</a></li>
                            <li><a href="http://www.codingcage.com/search/label/PDO" target="_blank">PHP PDO</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <div class="signin-form">

        <div class="container">
            <div class='alert alert-success'>
                <button class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong>  Successfully Registered.
            </div>

            <button class="btn btn-primary" id="back">
                <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
            </button>

        </div>

    </div>

</body>
</html>