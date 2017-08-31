<!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-title" href="../index.html">THE STOOP</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <!-- About Us Button -->
                <li><a href="../views/aboutus.php">ABOUT</a></li>
                <!-- Gallery Button -->
                <li><a href="../views/gallery.php">GALLERY</a></li>
                <!-- News Button -->
                <li><a href="../views/news.php">NEWS</a></li>
                <!-- Shop Button -->
                <li><a href="../views/shop.php">SHOP</a></li>
                <!-- Contact Us Button -->
                <li><a href="../views/contact.php">CONTACT</a></li>
                <!-- Admin Button -->
                <li class="dropdown">
                    <a href="../../admin/views/admin.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../../admin/views/admin.php">Admin Home Page</a></li>
                        <li><a href="#">Create New Admin</a></li>
                        <li><a href="#">Manage About Us Page</a></li>
                        <li><a href="#">Manage News Posts</a></li>
                        <li><a href="#">Update Shop Products</a></li>
                        <li><a href="#">View Product Requests</a></li>
                    </ul>
                </li>
                <!-- Social Media Icons -->
                <li><a href="https://www.facebook.com/thestoopri/"><span class="fa fa-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/stoopglass/"><span class="fa fa-instagram"></span></a></li>
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
                <li><a href="../views/users/signup.php">Sign Up</a></li>
                <!-- Login Button -->
                <li><a href="../views/users/login.php">Login</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
