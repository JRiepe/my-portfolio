<?php
// If you are using Composer
require 'vendor/autoload.php';

// If you are not using Composer (recommended)
// require("path/to/sendgrid-php/sendgrid-php.php");

$from = new SendGrid\Email(null, "jriepe@me.com");
$subject = "Hello World from the SendGrid PHP Library!";
$to = new SendGrid\Email(null, "jriepe@icloud.com");
$content = new SendGrid\Content("text/plain", "Hello, Email!");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = getenv('SENDGRID_API_KEY');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
echo $response->headers();
echo $response->body();





// 	if (isset($_POST["submit"])) {
// 		$name = $_POST['name'];
// 		$email = $_POST['email'];
// 		$message = $_POST['message'];
// 		$human = intval($_POST['human']);
// 		$from = 'Demo Contact Form'; 
// 		$to = 'johnriepe@gmail.com'; 
// 		$subject = 'Message from Contact Demo ';
		
// 		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
// 		// Check if name has been entered
// 		if (!$_POST['name']) {
// 			$errName = 'Please enter your name';
// 		}
		
// 		// Check if email has been entered and is valid
// 		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
// 			$errEmail = 'Please enter a valid email address';
// 		}
		
// 		//Check if message has been entered
// 		if (!$_POST['message']) {
// 			$errMessage = 'Please enter your message';
// 		}
// 		//Check if simple anti-bot test is correct
// 		if ($human !== 5) {
// 			$errHuman = 'Your anti-spam is incorrect';
// 		}
// // If there are no errors, send the email
// if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
// 	if (mail ($to, $subject, $body, $from)) {
// 		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
// 	} else {
// 		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
// 	}
// }
// 	}
?>