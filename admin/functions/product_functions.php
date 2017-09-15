<?php
/**
 * Creates a new row at bottom of the products Table.
 *
 * @return Boolean
 */
function addProduct($productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productImage, $productArtist) {
    $result = false;

    $db = getDatabase();

    $stmt = $db->prepare("INSERT INTO products SET productName = :productName, productPrice = :productPrice, productQuantity = :productQuantity, productCategoryID = :productCategoryID, productShortDescription = :productShortDescription, productLongDescription = :productLongDescription, productImage = :productImage, productArtist = :productArtist");

    $binds = array(
        ":productName" => $productName,
        ":productPrice" => $productPrice,
        ":productQuantity" => $productQuantity,
        ":productCategoryID" => $productCategoryID,
        ":productShortDescription" => $productShortDescription,
        ":productLongDescription" => $productLongDescription,
        ":productImage" => $productImage,
        ":productArtist" => $productArtist
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;    // was $result = true;
    }

    return $result;
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
 * Retrieves a SINGLE ROW from products Table
 *
 * @return array
 */
function viewOneProduct($productID) {
    $db = getDatabase();

    $stmt = $db->prepare("SELECT * FROM products WHERE productID = :productID");

    $binds = array(
        ":productID" => $productID
    );

    $result = array();
    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    return $result;
}

/**
 * Deletes a new row from the products Table.
 *
 * @return Boolean
 */
function deleteProduct($productID) {
    $isDeleted = false;

    $db = getDatabase();

    $stmt = $db->prepare("DELETE FROM products WHERE productID = :productID");

    $binds = array(
        ":productID" => $productID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $isDeleted = true;
    }

    return $isDeleted;
}

/**
 * Updates a specified row from products table
 *
 * @return Boolean
 */
function updateProduct($productID, $productName, $productPrice, $productQuantity, $productCategoryID, $productShortDescription, $productLongDescription, $productImage, $productArtist) {
    $result = false;

    $db = getDatabase();

    $stmt = $db->prepare("UPDATE products SET productID = :productID, productName = :productName, productPrice = :productPrice, productQuantity = :productQuantity, productCategoryID = :productCategoryID, productShortDescription = :productShortDescription, productLongDescription = :productLongDescription, productImage = :productImage, productArtist = :productArtist WHERE productID = :productID");

    $binds = array(
        ":productID" => $productID,
        ":productName" => $productName,
        ":productPrice" => $productPrice,
        ":productQuantity" => $productQuantity,
        ":productCategoryID" => $productCategoryID,
        ":productShortDescription" => $productShortDescription,
        ":productLongDescription" => $productLongDescription,
        ":productImage" => $productImage,
        ":productArtist" => $productArtist
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $result = true;
    }

    return $result;
}