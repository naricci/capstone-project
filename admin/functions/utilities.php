<?php

/**
 * A method to check if a Post request has been made.
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