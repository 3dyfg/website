<?php $name = $_POST['name'];
$formcontent="From: $name";
$recipient = "helpme@3dyfgroup.com";
$subject = "Message From HELP Contact Form";
$mailheader = "From: $name needs your help. \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "We are there for you! 🤗 We will soon contact you via Phone number / Email Id you have entered.<br> Thank you" . " -" . "<a href='http://3dyfgroup.com/' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>