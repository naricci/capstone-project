<?php
/**
 * Function to establish a database connection
 *
 * @return PDO Object
 */
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

function getDatabase() {
    $config = array(
        'DB_DNS' => "mysql:host=" + $_ENV['DB_HOST'] + ";port=" + $_ENV['DB_PORT'] + ";dbname=" + $_ENV['DB_NAME'],
        'DB_USER' => $_ENV['DB_USERNAME'],
        'DB_PASSWORD' => $_ENV['DP_PASSWORD']
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