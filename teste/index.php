<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;


//var_dump($email);

$novoEmail = new Email(2, "aioncomunicacao.com.br", "murilo@aioncomunicacao.com.br", "Mideas1618", "tls", '587', "murilo@aioncomiunicacao.com.br", "Equipe Aion");
$novoEmail->sendMail("Assunto de Teste #çá", "<h1>Esse é um e-mail de <u>teste</u></h1>", "murilo@aioncomunicacao.com.br", "Equipe Aion", "murilo.souza@gmail.com", "Murilo Souza");

var_dump($novoEmail);
