<?php

$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$enquiry = $_POST['enquiry'];

$email_from = 'server@thompsonspropertycare.co.uk';
$email_subject = "New Form Submission";
$email_body = "$enquiry
$name
$contact";
	
$to = "walkjay87@googlemail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

exit();


?>