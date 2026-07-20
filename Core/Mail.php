<?php

namespace Core;

use Core\Logs;
use App\Core\Functions;
use PHPMailer\PHPMailer\SMTP;
use App\Core\AppManipularError;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class Mail
{
    protected $manipulador;
    protected $function;
    protected $errors;


    public function __construct()
    {
        Logs::iniciar();
        $this->errors = [];

        // throw new \Exception('Not implemented');
    }

    public function enviar_email($name, $cidade, $telefone, $plano)
    {
        $mail = new PHPMailer(true);


        try {
            //Server settings
            $mail->SMTPDebug = 2;
            $mail->isSMTP(); //Send using SMTP
            $mail->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $_ENV['SMTP_USER'];                     //SMTP username
            $mail->Password   = $_ENV['SMTP_PASSWORD'];                 //SMTP password
            $mail->SMTPSecure = 465;        //Enable implicit TLS encryption
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;        //Enable implicit TLS encryption
            $mail->Port       = 587;                     //TCP port to connect to
            // $mail->Port       = $_ENV['SMTP_PORT'];                     //TCP port to connect to

            //Recipients
            $mail->setFrom($_ENV['SMTP_USER'], 'Mailer');
            $mail->addAddress($_ENV['SMTP_DESTINATION']);
            //$mail->addCC($_ENV['SMTP_CC']); // add cc recpient

            //Content
            // $corpo = mb_convert_encoding($corpo, 'UTF-8', 'auto');
            // $assunto = mb_convert_encoding($assunto, 'UTF-8', 'auto');
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $_ENV['SMTP_SUBJECT'];
            $mail->Body = "
              <h2>Formulário preenchido</h2>
              <p><strong>Nome:</strong> {$name}</p>
              <p><strong>Cidade:</strong> {$cidade}</p>
              <p><strong>Celular:</strong> {$telefone}</p>
              <p><strong>Plano selecionado:</strong> {$plano}</p>
              <hr>
             <p style='font-size:12px;color:gray;'>Mensagem automática enviada pelo site.</p>";
            $mail->AltBody = "Formulário preenchido:\n\n" .
                "Nome: {$name}\n" .
                "Cidade: {$cidade}\n" .
                "Celular: {$telefone}\n" .
                "Plano selecionado: {$plano}\n\n" .
                "Mensagem automática enviada pelo site.";
            $mail->CharSet = 'UTF-8';
            $mail->send();
            return true;
        } catch (Exception $e) {
            Logs::manipuladorDeExcecoes($e);
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
            return false;
        }
    }
}
