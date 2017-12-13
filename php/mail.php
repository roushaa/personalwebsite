<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer(true);
$mail->IsSMTP();
try {	
  $mail->Host       = "seyedehroshamm619@gmail.com"; 
  $mail->SMTPAuth   = true;                 
  $mail->Username   = "seyedehroshamm619@gmail.com"; 
  $mail->Password   = "******";        
  $mail->AddReplyTo('seyedehroshamm619@gmail.com', 'Rosha'); 
  $mail->AddAddress('seyedehroshamm619@gmail.com', 'Rosha'); 
  $mail->SetFrom('seyedehroshamm619@gmail.com', 'rosha'); 
  $mail->Subject = 'PHPMailer the subject'; 
  $mail->AltBody = 'Error sending email! Your server settings do not support this';
  $mail->CharSet = 'UTF-8'; 
  $mail->ContentType = 'text/html';  
  $mail->MsgHTML('<html>
<body>
 <font color="#CC0000"></font>!
</body>
</html>');
  //$mail->AddAttachment('images/phpmailer.gif'); 
  $mail->Send(); 
  echo "Email sent successfully\n";
} 
catch (phpmailerException $e) {
	echo $e->errorMessage();  phpmailer
} 
catch (Exception $e) {
	echo $e->getMessage(); 
}
?>
</body>
</html>
