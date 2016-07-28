<?php
//NOTE****************** This code would not work as cloud 9 blocked the sending of emails, we have left the code here to demonstrate that it was looked into, yet we were subjected to cloud 9 limitations 
$from = "464healy@gmail.com";
$to = "464healy@gmail.com";

$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));
$message = Trim(stripslashes($_POST['message']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body .="Email: ";
$body .=$email;
$body .="\n";
$body .="Message: ";
$body .=$message;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go){
	print("Success!");
}
else{
	print("Unable to send!!");
}
?>