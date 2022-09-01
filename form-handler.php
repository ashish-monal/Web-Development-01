<?php
$name = $_POST['name'];
$email= $_POST['email'];
$subject=$_POST['suject'];
$message=$_POST['message'];

$email_form = 'website@gmail.com';
$email_subject = 'Message from website';
$email_body = "User Name : $name.\n"."User Email : $email.\n"."subject: $subject.\n".message : $message.\n";

$to = 'aviashishranjan@gmail.com';
$headers = "From : $email_form \r\n";

$headers = "Reply-To : $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>