<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "contactus@3dyfgroup.com";
$subject = "Message From Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='http://3dyfgroup.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>