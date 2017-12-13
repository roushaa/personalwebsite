<!doctype html>
<html>
<head>
 <?php
$headers = 'Content-type: text/html; charset=utf-8' . "\r\n";
?>
<title> sendemail</title>
</head>
<body>
<?php

$to = "seyedehroshamm619@gmail.com";
$subject = "the subject";

$body = "<html>
</html>
</body>";
$headers = "From: yourname@example.com \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
if (mail($to, $subject, $body, $headers)) {
    echo("<p>Your email has been sent successfully</p>");
    } 
else {
    echo("<p>Error sending email! Your server settings do not support this</p>");
    }
?>
</body>
</html>
