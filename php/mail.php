<?php
 include "class.PHPMailer.php";
  include "class.SMTP.php"
  $mail=new PHPMailer(true);
  $mail->isSMTP();
if(inset($_post["Send"])); {

try {
 $mail->Host='smtp.gmail.com';
 $mail->SMTPAtuth=true;
 $mail->SMTPSecure="tls"
 $mail->port=587;
 $mail->username="seyedehroshamm619@gmail.com";
 $mail->setFrom("seyedehroshamm619@gmail.com""Rosha");
 $mail->addAddress($_POST["fullname"]);
 $mail->charset="UTF-8";
 $mail->contentType="Text\html";
 $mail->msgHTML($_POST["message"]);
 $mail->send(); 
 echo '<font color="#fff" face="arial , helvetica, sans-serif" size="+3">The message was sent successfully.</font>';                 
}

    
  
  

 catch(PHPMailerexception $e) {
  echo $e->errorMessage();
 
 }
  catch(Excaption $e1){
  echo $e1->getMessage();
  }
}
?>
