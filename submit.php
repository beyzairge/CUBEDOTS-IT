<?php
if(isset($_POST['email'])){

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$phone = isset($_POST['phone']) ? trim($_POST['phone']) : '';

$to      = 'renders@cubedots.com';
$subject = 'Contact us request form';
$message = "Name: $name <br> Email: $email <br> Phone: $phone";
//$headers = 'From:renders@cubedots.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'To: '.$to;
$headers[] = 'From: renders@cubedots.com';

$ok =mail($to, $subject, $message, implode("\r\n", $headers));


	header('Content-Type: application/json');
	echo json_encode(['status' => true,'message' =>'contact from submitted successfully.','mail_status'=>$ok]);
}else{
	header('Content-Type: application/json');
	echo json_encode(['status' => false,'message' =>'form submitting failed.']);
}