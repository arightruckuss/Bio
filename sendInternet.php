<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/phpmailer/src/Exception.php';
require 'phpmailer/phpmailer/src/PHPMailer.php';
require 'phpmailer/phpmailer/src/SMTP.php';
require 'phpmailer/phpmailer/src/OAuth.php';
require 'phpmailer/phpmailer/src/POP3.php';

// Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                               

$mail->From = $_REQUEST['email'];
$mail->FromName = $_REQUEST['name'];

$mail->addAddress("rucktooa@yahoo.com", "Ajay Rucktooa");


$mail->Subject = $_REQUEST['subject'];
$mail->Body = $_REQUEST['message'];

try {
    $mail->send();
    echo "<h1>Message has been sent successfully<h1>";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}