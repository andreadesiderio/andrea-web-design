<?php

if (isset($_POST['submit'])){
 $name = $_POST['name'];
 $email = $_POST['email'];  
 $phone = $_POST['phone'];  
 $preferredContactMethod = $_POST['preferredContactMethod'];  
 $message = $_POST['message'];     

$mailTo = 'andreadesiderio@outlook.com';
$headers = 'From: '.$name;
$txt = 'Message: ' '.\n\n'.$message;
$contactInfo = .$phone .$email;
$contactMethod = 'Prefers to be contacted by'.$preferredContactMethod;
mail($mailTo, $headers, $txt, $contactInfo, $contactMethod);
header("Location: form-validator.php?mailsend");
}