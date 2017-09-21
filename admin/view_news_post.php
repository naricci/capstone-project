<?php

session_start();

if ( !isset($_SESSION['adminEmail']) ) {
    header("Location : login.php");
}

?>