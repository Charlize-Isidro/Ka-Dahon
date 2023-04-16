
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $message = "rawr" . $user . "narecieve ko  na hano!";

    $mail->isSMTP();
    $mail->Host = "smtp.hostinger.com";
    $mail->SMTPAuth = 'true';
    $mail->Username = "contact@kadahon.shop";
    $mail->Password = "charlize@15";
    $mail->SMTPSecure = "tls";
    $mail->Port = '587';
 
    $mail->setFrom('contact@kadahon.shop', 'Ka-Dahon');
    $mail->addAddresss($user);
    $mail->isHTML(true);
    
    $mail->Subject = $_POST["subject"];
    $mail->Body = $message ;
 
    $mail->send();
    echo "Feedback Successful!";
 
}
?>