<?php
if (isset($_POST['submit'])) {
    $msg = 'Name: ' .$_POST['fullName'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Comment: ' .$_POST['comment'];
    mail('nicholasaricci@gmail.com', 'Stoop Contact Us Message', $msg);
    header('location: thankyou.php');
} else {
    header('location: ../contact.php');
    exit(0);
}