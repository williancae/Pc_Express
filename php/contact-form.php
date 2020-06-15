<?php
//Variáveis


$nome = $_POST['name'];
$email = $_POST['email'];
$mensagem = $_POST['message'];
$assunto = $_['subject'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

$emailenviar = "jotalmeida005@outlook.com";
  $destino = $email;
  $assunto = $assunto;

  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= 'From: $nome <$email>';
  $headers .= "Bcc: $EmailPadrao\r\n";

