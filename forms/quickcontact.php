<?php
$to = 'info@thunderbuddies4life.com';

//Language Options
$contact_labelmailhead = 'Quick Contact Email';
$contact_labelmailsubject = 'Quick Contact Email';
$contact_labelname = 'Name';
$contact_labelemail = 'Email';
$contact_labeladdress = 'Address';
$contact_labelmessage = 'Message';

$name = trim($_POST['name']);
$email = trim($_POST['email']);
if(isset($_POST['message']))
	$message = str_replace(chr(10), "<br>", $_POST['message']);
else $message="";



$body = "<html><head><title>$contact_labelmailhead</title></head><body><br>";
$body .= "$contact_labelname <b>" . $name . "</b><br>";
$body .= "$contact_labelemail <b>" . $email . "</b><br>";
$body .= "$contact_labelmessage<br><hr><br><b>" . $message . "</b><br>";
$body .= "<br></body></html>";
	
$subject = $contact_labelmailsubject.' ' . $name;
$header = "From: $email\n" . "MIME-Version: 1.0\n" . "Content-type: text/html; charset=utf-8\n";

mail($to, $subject, $body, $header);

?>