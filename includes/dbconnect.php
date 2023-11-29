<?php
/**
 * Function to establish a database connection
 *
 * @return PDO Object
 */
function getDatabase() {
    $config = array(
        'DB_DNS' => 'mysql:host=env[DB_HOST];port=env[DB_PORT];dbname=env[DB_NAME]',
        'DB_USER' => 'env[DB_USERNAME]',
        'DB_PASSWORD' => 'env[DP_PASSWORD]'
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