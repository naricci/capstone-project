<?php

// Load ENV variables
// require_once './vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();

/**
 * A method to check if a Post Request has been made.
 *
 * @return boolean
 */
function isPostRequest() {
    return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
}


/**
 * Retrieves ALL ROWS from categories Table
 *
 * @return array
 */
function viewAllCategories() {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM categories");

    $cat_results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $cat_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $cat_results;
}


/**
 * Retrieves ALL ROWS from products Table
 *
 * @return array
 */
function viewAllProducts() {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM products");

    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $results;
}


/**
 * Retrieves ALL ROWS from artists Table
 *
 * @return array
 */
function viewAllArtists() {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM artists");

    $artist_results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $artist_results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $artist_results;
}


/**
 * Retrieves ALL ROWS from newsposts Table
 *
 * @return array
 */
function viewAllNewsPosts() {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM newsposts");

    $results = array();
    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    return $results;
}


/**
 * Function that checks if a user is currently logged in
 *
 * @return bool
 */
function isLoggedIn() {

    if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] === false ) {
        return false;
    }

    return true;
}


/**
 * MySQL DB Connection String
 */
// $con = mysqli_connect($getenv['DB_HOST'], $getenv['DB_USERNAME'], "", $getenv['DB_NAME']);

// if (mysqli_connect_errno()) {
//     echo "The connection could not be established: " . mysqli_connect_error();
// }


/**
 *  function for getting User IP Address
 */
function getIPAddress() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if ( !empty($_SERVER['HTTP_CLIENT_IP']) ) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif ( !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}


/**
 *  function for getting Product Categories
 */
//function getCategory() {
//
//    global $con;
//
//    $get_category = "SELECT * FROM categories";
//
//    $run_category = mysqli_query($con, $get_category);
//
//    while ($row_cats=mysqli_fetch_array($run_category)) {
//
//        $categoryID = $row_cats['categoryID'];
//        $categoryName = $row_cats['categoryName'];
//        $categoryDescription = $row_cats['categoryDescription'];
//
//        echo "<li><a href='#'>$categoryName</a></li>";
//    }
//}


/**
 *  function for getting Products
 */
//function getProduct(){
//
//    if (!isset($_GET['cat'])){
//        if (!isset($_GET['brand'])){
//
//            global $con;
//
//            $get_pro = "select * from products order by RAND() LIMIT 0,6";
//
//            $run_pro = mysqli_query($con, $get_pro);
//
//            while($row_pro=mysqli_fetch_array($run_pro)){
//
//                $pro_id = $row_pro['product_id'];
//                $pro_cat = $row_pro['product_cat'];
//                $pro_brand = $row_pro['product_brand'];
//                $pro_title = $row_pro['product_title'];
//                $pro_price = $row_pro['product_price'];
//                $pro_image = $row_pro['product_image'];
//
//                echo "
//				<div id='single_product'>
//
//					<h3>$pro_title</h3>
//
//					<img src='../admin/product_images/$pro_image' width='180' height='180' />
//
//					<p><b> Price: $ $pro_price </b></p>
//
//					<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
//
//					<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>
//
//				</div>
//
//
//		";
//
//            }
//        }
//    }
//
//}