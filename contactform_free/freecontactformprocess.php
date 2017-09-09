<?php

if (isset($_POST['submit'])) {
    
    include 'contactformsettings.php';
    
    function died($error) 
    {
        echo "Sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
    
    if (!isset($_POST['fullName'])
        || !isset($_POST['email'])
        || !isset($_POST['phone'])
        || !isset($_POST['message'])
        || !isset($_POST['antispam'])
    ) {
        died('Sorry, there appears to be a problem with your form submission.');
    }
    
//    $fullName = $_POST['fullName']; // required
//    $email_from = $_POST['email']; // required
//    $phone = $_POST['phone']; // not required
//    $message = $_POST['message']; // required
//    $antispam = $_POST['antispam']; // required
    $fullName = filter_input(INPUT_POST, 'fullName');    // required
    $email_from = filter_input(INPUT_POST, 'email');     // required
    $phone = filter_input(INPUT_POST, 'phone');          // not required
    $message = filter_input(INPUT_POST, 'message');      // required
    $antispam = filter_input(INPUT_POST, 'antispam');    // required

    $error_message = "";
    
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    
    if (preg_match($email_exp, $email_from) == 0) {
        $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
    }
    if (strlen($fullName) < 2) {
        $error_message .= 'Your First Name does not appear to be valid.<br />';
    }
//    if (strlen($phone !== 10)) {
//        $error_message .= 'The number you entered is not a valid 10-digit telephone number.<br />';
//    }
    if (strlen($message) < 2) {
        $error_message .= 'The Comments you entered do not appear to be valid.<br />';
    }

    if ($antispam <> $antispam_answer) {
        $error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    }

    $email_message = "Form details below.\r\n";

    function Clean_string($string)
    {
        $bad = array("content-type","bcc:","to:","cc:");
        return str_replace($bad, "", $string);
    }

    $email_message .= "Full Name: ".Clean_string($fullName)."\r\n";
    $email_message .= "Email: ".Clean_string($email_from)."\r\n";
    $email_message .= "Phone Number: ".Clean_string($phone)."\r\n";
    $email_message .= "Message: ".Clean_string($message)."\r\n";
    
    $headers = 'From: '.$email_from."\r\n".
    'Reply-To: '.$email_from."\r\n".
    'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    header("Location: $thankyou");
?>
<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>
