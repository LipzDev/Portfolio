<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// VARIÁVEIS

$nome = isset($_POST['nome'])?$_POST['nome']:0;
$email = isset($_POST['email'])?$_POST['email']:0;
$assunto = isset($_POST['assunto'])?$_POST['assunto']:0;
$mensagem = isset($_POST['mensagem'])?$_POST['mensagem']:0;

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
    
    $mail->setFrom($email, $nome); // Quem enviou o email e o nome (preenchido no formulário).
    $mail->addAddress('emailDaEmpresa@gmail.com', 'Nome da empresa'); // Insira o webmail e o nome da empresa.
    $mail->addReplyTo($email); // Endereço de email do cliente para a empresa responder.
    
//
//  CONFIGURAÇÕES DO EMAIL, QUAL ASSUNTO, MENSAGEM.
//
    
    $mail->isHTML(true); // O email possui HTML?
    $mail->Subject = $assunto; // Assunto do email, digitado no formulário.
    $mail->Body =    "<strong>NOVA MENSAGEM</strong><br><br>
                     <strong>Nome:</strong> $nome<br>
                     <strong>Assunto:</strong> $assunto<br>
                     <strong>Mensagem:</strong> $mensagem<br><br><br><br>
                     <strong>Responder para:</strong> $email<br>"; // Mensagem do email em html, digitado no formulário.

    $mail->AltBody = "NOVA MENSAGEM<br><br>
                      Nome: $nome<br><br>
                      Assunto: $assunto<br><br>
                      Mensagem:<br> $mensagem<br><br><br>
                      Responder para: $email<br>"; // Mensagem do email em txt, digitado no formulário.
    $mail->send();

    header ('location:../index.php?status=Sucesso');    

    } catch (Exception $e) {
    header ('location:../index.php?status=Falha');  
}

?>