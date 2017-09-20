<?php

include("includes/db.php");

$token = $_REQUEST['token'];

$query = "UPDATE users SET userActivated='1' WHERE userToken='".$token."'";

if ( $run_query = mysqli_query($con, $query) ) {
    echo 'Great!  You have successfully verified your account.';
    exit;
}

echo mysqli_error($run_query);