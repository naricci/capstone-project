<?php 
/**
 * MySQL Connection String
 */
$con = mysqli_connect($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], "", $_ENV['DB_NAME']);

if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

