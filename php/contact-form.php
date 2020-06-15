<?php

//Variáveis
$Nome = $GetParam['name'];
$Email = $GetParam['Email'];
$Msg = $GetParam['message'];

$Email_remetente = "jotalmeida005@outlook.com";
$Email_destinatário = "jotalmeida007@hotmail.com"
$Email_reply = "{$Email}";

$Email_assunto = "Novo contato pelo site"
$Email_conteudo = "Nome = {$Nome} \n";
$Email_conteudo = "Email = {$Email} \n"
$Email_conteudo = "Mensagem = {$Msg} \n";
$HeaderArray = array(
    "From: $Email_remetente",
    "Reply-to: $Email_reply",
    "Subject: $Email_assunto",
    "Return-path: $Email_remetente",
    "MIME-Version: 1.0",
    "X-Prioriyi: 3",
    "Content-Type: text/html: charset=UTF-8"
);
$Email_headers = implode("\n, $HeaderArray");

if (mail($Email_destinatário, $Email_assunto, $Email_conteudo, $Email_headers)) {
    ?>
        <p>Sucesso, sua mensagem foi enviada</p>
} else {
    <p> Falha no envio da mensagem.
}
    
