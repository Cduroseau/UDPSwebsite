<?php
if(!empty($_POST["send"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $content = $_POST["message"];

    $toEmail = "Amber@DavidHardrick.com";
    $mailHeaders = "From: " . $firstname . " " . $lastname . "<". $email .">\r\n";
    if(mail($toEmail, $subject, $content, $mailHeaders)) {
        $message = "Your contact information is received successfully.";
        $type = "success";
    }
}
echo '<h2>Message sent</h2>';
header('location:index.html#contact');
?>