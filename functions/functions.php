<?php

$con = mysqli_connect("localhost", "root", "", "thestoop");


/**
 *  function for getting categories
 */
function getCats() {

    global $con;

    $get_cats = "SELECT * FROM categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats=mysqli_fetch_array($run_cats)) {

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];

        echo "<li><a href='#'>$cat_title</a></li>";
    }
}