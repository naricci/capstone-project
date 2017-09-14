<?php
/* *
 * Creates a new row at bottom of the newsposts Table.
 *
 * @return Boolean
 */
function addNewsPost($postTitle, $postWriter, $postContent, $postImageName, $postAdminID) {
    $result = false;

    $db = getDatabase();

    $stmt = $db->prepare("INSERT INTO newsposts SET postTitle = :postTitle, postWriter = :postWriter, postDate = now(), postContent = :postContent, postImageName = :postImageName, postAdminID = :postAdminID");

    $binds = array(
        ":postTitle" => $postTitle,
        ":postWriter" => $postWriter,
        ":postContent" => $postContent,
        ":postImageName" => $postImageName,
        ":postAdminID" => $postAdminID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = true;
    }

    return $result;
}

/**
 * Retreives ALL ROWS from newsposts Table
 *
 * @return String
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
 * Retrieves a SINGLE ROW from newsposts Table
 *
 * @return array
 */
function viewOneNewsPost($postID) {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM newsposts WHERE postID = :postID");

    $binds = array(
        ":postID" => $postID
    );

    $result = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    return $result;
}

/**
 * Deletes a new row from the newsposts Table.
 *
 * @return Boolean
 */
function deleteProduct($postID) {
    $isDeleted = false;

    $db = getDatabase();

    $stmt = $db->prepare("DELETE FROM newsposts WHERE postID = :postID");

    $binds = array(
        ":postID" => $postID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $isDeleted = true;
    }

    return $isDeleted;
}

/**
 * Updates a specified row from newsposts table
 *
 * @return Boolean
 */
function updateNewsPost($postID, $postTitle, $postWriter, $postContent, $postImageName, $postAdminID)
{
    $result = false;

    $db = getDatabase();

    $stmt = $db->prepare("UPDATE newsposts SET postID = :postID, postTitle = :postTitle, postWriter = :postWriter, postContent = :postContent, postImageName = :postImageName, postAdminID = :postAdminID WHERE postID = :postID");

    $binds = array(
        ":postID" => $postID,
        ":postTitle" => $postTitle,
        ":postWriter" => $postWriter,
        ":postContent" => $postContent,
        ":postImageName" => $postImageName,
        ":postAdminID" => $postAdminID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;
    }

    return $result;
}