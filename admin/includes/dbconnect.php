<?php
/**
 * Function to establish a database connection
 *
 * @return PDO Object
 */
function getDatabase() {
    $config = array(
        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=thestoop',
        'DB_USER' => 'root',
        'DB_PASSWORD' => ''
    );

    try {
        /* Create a Database connection and
         * save it into the variable */
        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    } catch (Exception $e) {
        /* If the connection fails we will close the
         * connection by setting the variable to null */
        $db = null;
    }

    return $db;
}

///**
// * Function to establish a database connection
// *
// * @return PDO Object
// */
//function dbconnect() {
//    $config = array(
//        'DB_DNS' => 'mysql:host=localhost;port=3306;dbname=thestoop',
//        'DB_USER' => 'root',
//        'DB_PASSWORD' => ''
//    );
//
//    try {
//        /* Create a Database connection and
//         * save it into the variable */
//        $db = new PDO($config['DB_DNS'], $config['DB_USER'], $config['DB_PASSWORD']);
//        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//    } catch (Exception $ex) {
//        /* If the connection fails we will close the
//         * connection by setting the variable to null */
//        $db = null;
//        $error_msg = $ex->getMessage();
//        include 'error.php';
//        exit();
//    }
//
//    return $db;
//}



