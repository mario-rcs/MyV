<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $respuestas = $_POST['contact'];
    
    //////////////////////////////////VALIDAR DATOS///////////////////////////////////////
    $error = '';
    //NAME
    if(empty($respuestas['name'])){
        $error = 'Please enter a name <br>';
    }else{
        $respuestas['name'] = filter_var($respuestas['name'], FILTER_SANITIZE_STRING);
        $respuestas['name'] = trim($respuestas['name']);
        if($respuestas['name'] == ''){
            $error .= 'Please enter a name <br>';
        }
    }

    //EMAIL
    if(empty($respuestas['email'])){
        $error .= 'Enter an email <br>';
    }else{
        if (!filter_var($respuestas['email'], FILTER_VALIDATE_EMAIL)){
            $error .= 'Enter an email <br>';
        }else{
            $respuestas['email'] = filter_var($respuestas['email'], FILTER_SANITIZE_EMAIL);
            $respuestas['email'] = trim($respuestas['email']);
        }
    }

    //MESSAGE
    if(empty($respuestas['message'])){
        $error .= 'Please enter a message <br>';
    }else{
        $respuestas['message'] = filter_var($respuestas['message'], FILTER_SANITIZE_STRING);
        $respuestas['message'] = trim($respuestas['message']);
        if($respuestas['message'] == ''){
            $error .= 'Please enter a message <br>';
        }
    }

    //NUMBER
    if(empty($respuestas['number'])){
        $error .= 'Please enter a number <br>';
    }else{
        if (!filter_var($respuestas['number'], FILTER_VALIDATE_INT)){
            $error .= 'Please enter a number <br>';
        }else{
            $respuestas['number'] = filter_var($respuestas['number'], FILTER_SANITIZE_NUMBER_INT);
            $respuestas['number'] = trim($respuestas['number']);
        }
    }

    //SERVICE
    if(empty($respuestas['service'])){
        $error .= 'Enter a service <br>';
    }else{
        $respuestas['service'] = filter_var($respuestas['service'], FILTER_SANITIZE_STRING);
        $respuestas['service'] = trim($respuestas['service']);
        if($respuestas['service'] == ''){
            $error .= 'Enter a service <br>';
        }
    }

    //////////////////////////////////ENVIAR CORREO///////////////////////////////////////
    if($error===''){
        //Instanciamos mailer
        $mail = new PHPmailer();
        try {
            //Protocolo de transferencia SMTP
            $mail->isSMTP();
            //Configuramos SMTP
            $mail->Host = 'smtp.mailtrap.io';
            $mail->SMTPAuth = true;
            $mail->Username = '8a5b806d7d18f6';
            $mail->Password = '83422b679a095e';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 2525;

            //Configurar el contenido del email
            $mail->setFrom('admin@western.com', 'western.com');//from web
            $mail->addAddress('admin@wester.com');//to email
            $mail->Subject = 'You have a new message from your website';//Asunto

            // Habilitar html
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
                        
            // Definir el contenido
            $contenido = '<html>'; 
            $contenido .= '<p> New message from westernbookkepingtaxservices.com </p>';
            $contenido .= '<p>Name: ' . $respuestas['name'] . '</p>';
            $contenido .= '<p>Email: ' . $respuestas['email'] . '</p>';
            $contenido .= '<p>Number: ' . $respuestas['number'] . '</p>';
            $contenido .= '<p>Service required by the customer: ' . $respuestas['service'] . '</p>';
            $contenido .= '<p>Customer message: ' . $respuestas['message'] . '</p>';
            $contenido .= '</html>';

            $mail->Body = $contenido;
            $mail->AltBody = 'New message from westernbookkepingtaxservices.com           ' . 'Name: ' . $respuestas['name'] . '           Email: ' . $respuestas['email'] . '           Number: ' . $respuestas['number'] . '           Service required by the customer: ' . $respuestas['service'] . '           Customer message: ' . $respuestas['message'];;

            if($mail->send()){
                echo 'exito';
            }else{
                $error .= "Message could not be sent.";
                echo $error;
            }
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }else{
        echo $error;
    }
}
