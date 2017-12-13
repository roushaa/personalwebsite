<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> sendemail</title>
</head>
<body>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'seyedehroshamm619@gmail.com';
$subject = 'the subject';
$message = 'FROM: '.$name.' Email: '.$email.'Message: '.$message;
$headers = 'From: mohammadiroshaps@gmail.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { 
mail($to, $subject, $message, $headers); 
echo "Your email was sent!"; 
}else{
echo "Invalid Email, please provide an correct email.";
}
?>
</body>
</html>
