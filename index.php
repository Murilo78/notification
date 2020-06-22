<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;


//var_dump($email);

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<h1>Esse é um e-mail de teste</h1>", "murilo@aioncomunicacao.com.br", "Murilo", "murilo.souza@gmail.com", "Destinatário");

var_dump($novoEmail);