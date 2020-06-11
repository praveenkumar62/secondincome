
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'config.php';
require 'plugins/PHPMailer/src/Exception.php';
require 'plugins/PHPMailer/src/PHPMailer.php';
require 'plugins/PHPMailer/src/SMTP.php';

list($name, $phone, $email, $message) = array_values($_POST);

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    td {
      padding: 9px 15px;
      text-align: center;
    }
    </style>
</head>
<body>
<p>Hi Team,</h1>
<table border="1" border-spacing="" style="border-collapse:collapse;">
<tr>
    <td>Name:</td>
    <td>'.$name.'</td>
</tr>
<tr>
    <td>Email:</td>
    <td>'.$email.'</td>
</tr>
<tr>
    <td>Phone:</td>
    <td>'.$phone.'</td>
</tr>
<tr>
    <td>Message:</td>
    <td>'.$message.'</td>
</tr>
</table>
</body>
</html>';


$mail = new PHPMailer(true);

try {

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = CONFIG['email']['host'];                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = CONFIG['email']['username'];                       
    $mail->Password   = CONFIG['email']['password'];                               
    $mail->SMTPSecure = CONFIG['email']['SMTPSecure'];   'ssl';         
    $mail->Port       = CONFIG['email']['port'];                          

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('blastboys621@gmail.com', 'Second Income');     
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // Content
    $mail->isHTML(true);                                  
    $mail->Subject = 'Second Income - New User Contacted';
    $mail->Body    = $html;
    $mail->AltBody = strip_tags($html);

    $mail->send();
    header('Location: confirmation.php');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>