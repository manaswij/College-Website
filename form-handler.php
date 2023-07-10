<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name. \n".
              "User Email: $visiter_email.\n".
              "Subject: $subject. \n".
              "User Messege: $messege .\n";

$to = 'aditijadhav17@gmail.col';
$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";

mail($t0,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>
