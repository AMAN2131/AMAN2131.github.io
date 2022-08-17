<?php

$name = $_POST['name'];
$visiter_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from='info@WEBDESIGN.COM';

$email_subject ='New Form Submission';

$email_body ="User Name: $name.\n".
             "User Email: $visiter_email.\n".
             "Subject: $subject.\n".
             "User Message: $message.n\";

$to ='saxena.aman2131@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n;

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>