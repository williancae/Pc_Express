<?php
include_once ("conectdb.php");

$cpf = $_POST['cpf'];
$name = $_POST['name'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$repeatSenha = $_POST['repeat-senha'];

if($senha === $repeatSenha){
    $correctSenha = $senha;
}else{
    echo "<script>alert('As senhas não coincidem')</script>";
}

echo $correctSenha;

/*$updateDb = "update login set cpf = '$cpf', nome = '$name', email = '$email', senha = '$correctSenha'";
$submitDb = mysqli_query($link,$updateDb);

if(mysqli_affected_rows($link) == 1){
    echo 
        "Cadastro redefinido com sucesso!<br/> Por favor, volte a página.";    
}else{
    echo 
       "Não foi possível cadastrar o usuário.";    
}*/
?>