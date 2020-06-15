<?php
$host = "localhost";
$db = "pcexpress";
$user = "root";
$pass = "";

$nome = "";
$email = "";
$cpf = "";
$update = false;


$conexao = mysqli_connect($host,$user,$pass,$db);

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    mysqli_query($conexao, "INSERT INTO login (nome, email, cpf) VALUES ('$nome', '$email', '$cpf')"); 
    var_dump($nome);
    //header('location: ../index.html');
}


if (isset($_POST['update'])) {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    mysqli_query($conexao, "UPDATE login SET nome='$nome', email='$email' WHERE cpf=$cpf");
    //header('location: ../index.html');
}

if (isset($_GET['del'])) {
$id = $_GET['del'];
mysqli_query($conexao, "DELETE FROM login WHERE name = $name"); 
//header('location: index.html');
}