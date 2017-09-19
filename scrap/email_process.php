<?php

$to = 'mr.naricci13@yahoo.com';
$subject = 'this came from your mother';

$name = $_POST['name'];
//$name = filter_input($_POST, 'name');
$email = $_POST['email'];
//$email = filter_input($_POST, 'email');
$message = $_POST['message'];
//$message = filter_input($_POST, 'message');
$header = 'Message from...';

$body = <<<EMAIL

Hi ! My name is $name.

$message

From $name
Email:  $email

EMAIL;

$header = "From: $email";

if (isset($_POST['submit'])) {
    if ($name == '' || $email == '' || $message == '') {
        $feedback = 'Please fill out ALL fields.';
    } else {
        mail($to, $subject, $body, $header);
        $feedback = 'Your message has been sent.';
    }
}