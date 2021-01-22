<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// VARIÁVEIS

$capturaEmail = isset($_POST['capturaEmail'])?$_POST['capturaEmail']:0;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

//
//  CONFIGURAÇÕES DA HOSPEDAGEM.
//

    $mail->SetLanguage('br'); // Linguagem padrão do email.
    $mail->CharSet = "utf8"; // Charset do idioma escolhido.

    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->Port = 2525;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "65be5df966d081";
    $mail->Password = "b09492997f4e2d";

//
//  CONFIGURAÇÕES DE QUEM ENVIA E QUEM RECEBE O EMAIL.
//
    
$mail->setFrom($capturaEmail, 'Desconhecido'); // Quem enviou o email e o nome (preenchido no formulário).
$mail->addAddress('emailDaEmpresa@gmail.com', 'Nome da empresa'); // Insira o webmail e o nome da empresa.
$mail->addReplyTo($capturaEmail); // Endereço de email do cliente para a empresa responder.

//
//  CONFIGURAÇÕES DO EMAIL, QUAL ASSUNTO, MENSAGEM.
//

$mail->isHTML(true); // O email possui HTML?
$mail->Subject = 'Email capturado!'; // Assunto do email, digitado no formulário.
$mail->Body =    "<strong>NOVO EMAIL</strong><br><br>
                 <strong>Email:</strong> $capturaEmail<br>"; // Mensagem do email em html, digitado no formulário.

$mail->AltBody = "NOVO EMAIL<br><br>
                  Email: $capturaEmail<br>"; // Mensagem do email em txt, digitado no formulário.
$mail->send();
header ('location:../index.php?status=Sucesso');

} catch (Exception $e) {

    header ('location:../index.php?status=Erro');
}

?>