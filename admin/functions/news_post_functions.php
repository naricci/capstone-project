<?php
/**
 * Creates a new row at bottom of the newsposts Table.
 *
 * @param $postTitle
 * @param $postWriter
 * @param $postContent
 * @param $postImageName
 *
 * @return Boolean
 */
function addNewsPost($postTitle, $postWriter, $postContent, $postImageName) {
    $result = false;
    //$target = 'uploads/news_posts/';

    $db = getDatabase();

    $stmt = $db->prepare("INSERT INTO newsposts SET postTitle = :postTitle, postWriter = :postWriter, postDate = NOW(), postContent = :postContent, postImageName = :postImageName");

    $binds = array(
        ":postTitle" => $postTitle,
        ":postWriter" => $postWriter,
        ":postContent" => $postContent,
        ":postImageName" => $postImageName
    );

//    // Writes the photo to the server
//    if ( move_uploaded_file($_FILES['postImageName']['tmp_name'], $target) ) {
//
//        // Tells you if its all ok
//        echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
//
//    } else {
//
//        // Gives and error if its not
//        echo "Sorry, there was a problem uploading your file.";
//    }

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;    // Look into this!
    }

    return $result;
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
 * Retrieves a SINGLE ROW from newsposts Table
 *
 * @param $postID
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
 * @param $postID
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
 * @param $postID
 * @param $postTitle
 * @param $postWriter
 * @param $postContent
 * @param $postImageName
 * @param $postAdminID
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