<?php
require_once 'conectdb.php';

session_start();

if(isset($_POST['btn-entrar'])):
	$erros = array();
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(empty($email) or empty($senha)):
		$erros[] = "<li> O campo email/senha precisa ser preenchido </li>";
	else:

		$sql = "SELECT email FROM login WHERE email = '$email'";
		$resultado = mysqli_query($conexao, $sql);		

		if(mysqli_num_rows($resultado) > 0):
		$senha = md5($senha);       
		
		$sql = "SELECT * FROM login WHERE email = '$email' AND senha = '$senha'";
	
		$resultado = mysqli_query($conexao, $sql);
		//var_dump($resultado);
			if(mysqli_num_rows($resultado) == 1):
				$dados = mysqli_fetch_array($resultado);
				mysqli_close($conexao);
				$_SESSION['logado'] = true;
				$_SESSION['id_usuario'] = $dados['id'];
				$_SESSION['nome'] = $dados['nome'];
				var_dump($dados['nome']);
				echo "<br>";
				var_dump($_SESSION['nome']);
				header('Location: userpage.php');
			else:
				$erros[] = "<li> Usuário e senha não conferem </li>";
			endif;

		else:
			$erros[] = "<li> Usuário inexistente </li>";
		endif;

	endif;

endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/icon/favicon.ico"> 

    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../../assets/favicon.ico" type="image/x-icon">


    <title>Login</title>
</head>
<body>

    <div class="intro background">
    <form class="box" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h1 class="back-login">Login</h1>
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="senha"  placeholder="Senha">
        <input type="submit" name="btn-entrar" value="Login">
        <a href="../html/Login/cadastro.html">Não possui cadastro?</a><br>
        <a href="lossPassword.html">Esqueci a senha</a>
    </form>
    </div>

</body>
</html>