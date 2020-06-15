<?php
$host = "localhost";
$db = "pcexpress";
$user = "root";
$pass = "";


$conexao = mysqli_connect($host,$user,$pass,$db);

if (isset($_POST['save'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpfs = $_POST['cpf'];

    mysqli_query($db, "INSERT INTO login (nome, email, cpf) VALUES ('$nome', '$email', '$cpf')"); 
    header('location: ../index.html');
}


if (isset($_POST['update'])) {
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];

    mysqli_query($db, "UPDATE login SET nome='$nome', email='$email' WHERE cpf=$cpf");
    header('location: ../index.html');
}

if (isset($_GET['del'])) {
$id = $_GET['del'];
mysqli_query($db, "DELETE FROM login WHERE id=$id");
$_SESSION['message'] = "email deleted!"; 
header('location: index.php');
}