
<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
 
// require 'PHPMailer/src/Exception.php';
// require 'PHPMailer/src/PHPMailer.php';
// require 'PHPMailer/src/SMTP.php';



// if(isset($_POST["send"])){
//     $name = $_POST['name'];
//     $message = "rawr" . $name . "narecieve ko  na hano!";


//     $mail = new PHPMailer(true);
//     $mail->isSMTP();
//     $mail->Host = "smtp.hostinger.com";
//     $mail->SMTPAuth = true;
//     $mail->Username = "contact@ka-dahon.shop";
//     $mail->Password = "charlize@15";
//     $mail->SMTPSecure = "tls";
//     $mail->Port = '587';
 
//     $mail->setFrom('contact@ka-dahon.shop', 'Ka-Dahon');
//     $mail->isHTML(true);
//     $email = $_POST['email'];
//     $mail->addAddress($email);
//     $mail->isHTML(true);
//     $mail->Subject = $_POST["subject"];
//     $mail->Body =($message);
//     $mail->send();

//     echo "Feedback Successful!";
 
// }

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    //POST
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //PHP Mailer Declaration
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@ka-dahon.shop';
    $mail->Password = 'charlize@15'; //Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port = '587';

    //SETTING Email
    $mail->setFrom('contact@ka-dahon.shop', 'Ka-Dahon'); //Senders Email
    $mail->addAddress($sender); //Receivers Email
    $mail->isHTML(true);
    $mail->Subject = "Good Day!";
    $mail->Body = "Thank you for contacting us! We will get back to you shortly. Have a wonderful day " . $name;
    $mail->send();

    echo "Feedback Successful!";
}
?>