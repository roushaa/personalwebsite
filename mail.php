<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "seyedehroshamm619@gmail.com";
  $post = $_REQUEST['NAME'];
  $email = $_REQUEST['EMAIL'];
  $message = $_REQUEST['submit'];
  
  //send email
  mail($admin_email, "$post", $message, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
  
   "email" variable is not filled out, display the form
  else  {
?>
