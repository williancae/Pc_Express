<?php

include 'conectdb.php';

$cpf = $_POST['cpf'];
$name = $_POST['name'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);
$repeatSenha = md5($_POST['repeat-senha']);

if($senha === $repeatSenha){
    $correctSenha = $senha;
    $sql = "INSERT INTO `login`(`cpf`, `nome`, `email`, `senha`) VALUES ($cpf,'$name', '$email', '$senha')";
    $insert = mysqli_query($conexao, $sql);
    header("Location: login.php");
}else{
    echo "<script>alert('As senhas não coincidem')</script>";
}
?>


