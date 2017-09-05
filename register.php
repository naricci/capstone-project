<?php

require_once 'functions/dbconfig.php';

if($_POST)
{
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userFirstName = $_POST['userFirstName'];
    $userLastName = $_POST['userLastName'];
    $userDOB = $_POST['userDOB'];
    $userStreetAddress = $_POST['userStreetAddress'];
    $userStreetAddress2 = $_POST['userStreetAddress2'];
    $userCity = $_POST['userCity'];
    $userState = $_POST['userState'];
    $userZip = $_POST['userZip'];
    $userCountry = $_POST['userCountry'];
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];

    $password = md5($userPassword);

    try
    {

        $stmt = $db_con->prepare("SELECT * FROM users WHERE userName=:userName");
        $stmt->execute(array(":userEmail"=>$userEmail));
        $count = $stmt->rowCount();

        if ($count == 0) {

            $stmt = $db_con->prepare("INSERT INTO users(userName, userPassword, userFirstName, userLastName, userDOB, userStreetAddress, userStreetAddress2, userCity, userState, userZip, userCountry, userPhone, userEmail, userDateJoined) VALUES(:userName, :userPassword, :userFirstName, :userLastName, :userDOB, :userStreetAddress, :userStreetAddress2, :userCity, :userState, :userZip, :userCountry, :userPhone, :userEmail, :userDateJoined)");
            $stmt->bindParam(":userName",$userName);
            $stmt->bindParam(":userPassword",$userPassword);
            $stmt->bindParam(":userFirstName",$userFirstName);
            $stmt->bindParam(":userLastName",$userLastName);
            $stmt->bindParam(":userDOB",$userDOB);
            $stmt->bindParam(":userStreetAddress",$userStreetAddress);
            $stmt->bindParam(":userStreetAddress2",$userStreetAddress2);
            $stmt->bindParam(":userCity",$userCity);
            $stmt->bindParam(":userState",$userState);
            $stmt->bindParam(":userZip",$userZip);
            $stmt->bindParam(":userCountry",$userCountry);
            $stmt->bindParam(":userPhone",$userPhone);
            $stmt->bindParam(":userEmail",$userEmail);
            $stmt->bindParam(":userDateJoined",$userDateJoined);

            if ($stmt->execute())
            {
                echo "registered";
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else {

            echo "1"; //  not available
        }

    }
    catch (PDOException $e){
        echo $e->getMessage();
    }
}

?>