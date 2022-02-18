<?php
namespace App\controllers;
defined("APPPATH") OR die("Access denied");
require dirname(__DIR__).'/../public/librerias/PHPMailer/Exception.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/PHPMailer.php';
require dirname(__DIR__).'/../public/librerias/PHPMailer/SMTP.php';

use \Core\MasterDom;
use \Core\Controller;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception; 


class Mailer extends Controller{
  

    private $_contenedor;

    function __construct(){
        parent::__construct();
    }


    public function mailer($msg) {
        $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'pruebass345@gmail.com';                     //SMTP username
    $mail->Password   = 'pruebas123';                               //SMTP password
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPAutoTLS = false;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pruebass345@gmail.com', 'Gerson');
    $mail->addAddress('gvelasco_08@hotmail.com', 'Ger');     //Add a recipient
    
    $message = "<h5>Thank you for submitting your pre-registration form!</h5>";
    $message .= "<h5>Dear ".$msg['name'] ."</h5><br>";
    $message .= "<p>Payment method ".$msg['pay']."</p>";
    $message .= "<p>Account number ".$msg['account_number']."</p>";
    $message .= "<p>Bank ".$msg['bank']."</p>";
    $message .= "<p>Name ".$msg['name_association']."</p>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Asunto de prueba';
    $mail->Body    = $message;
    $mail->AltBody = 'Mensaje plano';

    // $msg = [
    //     'pay' => $pay,
    //     'name' => $name_register,
    //     'message_pay' => $message_pay,
    //     'amount' => $costo,
    //     'date_pay' => $limit_pay,
    //     'reference' => $reference_user,
    //     'account_number' => $account_number,
    //     'bank' => $bank,
    //     'name_association' => $name_association,
    //     'swift_account' => $swift_account,
    // ];
    
    $mail->send();
    //echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    //echo "No se pudo enviar el email: {$mail->ErrorInfo}";
}

    }

}
