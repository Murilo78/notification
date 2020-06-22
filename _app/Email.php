<?php

namespace Notification;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    private $mail = \stdClass::class;
    
    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $this->mail->isSMTP();                                            // Send using SMTP
        $this->mail->Host       = 'aioncomunicacao.com.br';               // Set the SMTP server to send through
        $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $this->mail->Username   = 'murilo@aioncomunicacao.com.br';        // SMTP username
        $this->mail->Password   = 'Mideas1618';                           // SMTP password
        $this->mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $this->mail->Port       = 587;
        $this->mail->ChartSet   = 'utf-8';
        $this->mail->setLanguage('br');
        $this->mail->isHTML(true);
        $this->mail->setFrom('murilo@aioncomunicacao.com.br', 'Equipe Aion');        
    }
    
    public function sendMail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName)
    {
        $this->mail->Subject = (string)$subject;
        $this->mail->Body = $body;
        
        $this->mail->addReplyTo($replyEmail, $replyName);
        $this->mail->addAddress($addressEmail, $addressName);
        
        try {
            $this->mail->send();
        } catch(Exception $e) {
            echo "Erro ao enviar e-mail: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}

