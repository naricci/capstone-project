<?php 

$con = mysqli_connect("env[DB_HOST]","env[DB_USERNAME]","","env['DB_NAME']");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


