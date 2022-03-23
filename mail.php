<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$website = $_POST['website'];
$message = $_POST['message'];

$to = "gabrileyashim405@gmail.com";

$subject = "Mail From " . $name . $subject;
$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;

$headers = "From: noreply@Gabriel_Yashim_-_Portfolio.com" . "\r\n" .
    "CC: gabrielyashim090995@gmail.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thanks.html");
?>
