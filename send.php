
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    //POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = 'Ka-Dahon | Feedback ' .  $_POST['subject'];
    $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = 'true';
    $mail->Username = 'inquiry@ka-dahon.shop';
    $mail->Password = 'Charlize@15'; //Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    //SETTING Email
    $mail->setFrom('inquiry@ka-dahon.shop', 'Ka-Dahon'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Greeting!";
    $mail->Body = "Thank you for contacting us! We will get back to you shortly. Have a wonderful day " . $name;
    $mail->send();

    echo "Feedback Successful!";
}
?>