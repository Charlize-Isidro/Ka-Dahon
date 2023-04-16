
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_POST["send"])){
    $name = $_POST['name'];
    $message = "rawr" . $name . "narecieve ko  na hano!";


    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = 'true';
    $mail->Username = "contact@ka-dahon.shop";
    $mail->Password = "charlize@15";
    $mail->SMTPSecure = "tls";
    $mail->Port = '587';
 
    $mail->setFrom('contact@ka-dahon.shop', 'Ka-Dahon');
    $mail->isHTML(true);
    $email = $_POST['email'];
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = $_POST["subject"];
    $mail->Body =($message);
    $mail->send();
    
    echo "Feedback Successful!";
 
}
?>