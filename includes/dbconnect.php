<?php
/**
 * Function to establish a database connection
 *
 * @return PDO Object
 */
function getDatabase() {
    $config = array(
        'DB_DNS' => "mysql:host=j21q532mu148i8ms.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;port=3306;dbname=ajrk77bqeluz3ml3",
        'DB_USER' => getenv('DB_USERNAME'),
        'DB_PASSWORD' => getenv('DP_PASSWORD')
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
        $message = $e->getMessage();
        include 'error.php';
        exit();
    }

    return $db;
}
?>