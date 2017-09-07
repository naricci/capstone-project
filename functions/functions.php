<?php

/**
 * A method to check if a Post Request has been made.
 *
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}

/* MySQL DB Connection String */
$con = mysqli_connect("localhost", "root", "", "thestoop");

if (mysqli_connect_errno()) {
    echo "The connection could not be established: " . mysqli_connect_error();
}

/**
 *  function for getting User IP Address
 */
function getIPAddress() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

/**
 *  function for getting Categories
 */
function getCategory() {

    global $con;

    $get_category = "SELECT * FROM categories";

    $run_category = mysqli_query($con, $get_category);

    while ($row_cats=mysqli_fetch_array($run_category)) {

        $categoryID = $row_cats['categoryID'];
        $categoryName = $row_cats['categoryName'];
        $categoryDescription = $row_cats['categoryDescription'];

        echo "<li><a href='#'>$categoryName</a></li>";
    }
}