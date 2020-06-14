<?php 

    include 'conectdb.php'; 

    $email=$_POST['email']; 
    $senha=$_POST['senha'];

$conexao = new mysqli($host ,$user, $pass, $db);
$sql = "SELECT * FROM `login` where `email` = '$email' and `senha` = '$senha'";  

$resultado = $conexao->query($sql);

if($resultado->num_rows>0){ 
    $_SESSION['email'] = $email; 
    $_SESSION['senha'] = $senha; 
    header('location:index.html');
    }else{  
    session_unset();
    session_destroy();  
    echo "<script>alert('Login ou Senha incorretos, tente novamente')  	window.location.href='login.html'</script>  	";  }