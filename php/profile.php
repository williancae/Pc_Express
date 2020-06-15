<?php
// Conexão
require_once 'conectdb.php';


// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	  header('Location: login.php');
endif;
$resultado = $_SESSION;
$update = true;
// Dados
//var_dump($resultado);
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
//$dados = mysqli_fetch_array($resultado);
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

$nome = $_SESSION['nome'];
$cpf = $_SESSION['cpf'];
$email = $_SESSION['email'];
//var_dump($nome);
//echo "<br>";
//var_dump($dados);  
//var_dump($nome);
//var_dump($cpf);
//var_dump($email);

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <!-- Bootstrap-->
    <link
     rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
     crossorigin="anonymous"
    />

    <!-- 
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Custom Stylesheet
    <link rel="stylesheet" href="../css/style.css">

    <!-- Slick
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">

    </head>

  <!-- Header-->
  <header>
    <div class="container wall">
        <div class="row">
            
            <div class="col-md-4 col-12 p-0 ">
                 <img 
                 class="site-title primary-color text-white p-0" 
                 width="150px"
                 height="150px"
                 src="../assets/logo.png"
                 >
            </div>
            <div class="col-md-4 col-sm-12 col-12 text-right">
             <div class="btn-group text-right">
                 <button
                 class="btn border dropdown-toggle my-,d-4 my-2 text-white"
                 data-toggle="dropdown"
                 aria-haspopup="true"
                 aria-expanded="false"
                 >
                 R$
                 </button>
                 <div class="dropdown-menu">
                     <a href="#"  class="dropdown-item ">USD Dólar</a>
                 </div>
             </div>
         </div>
            <div class="col-md-4 col-12 text-right">
                <p class="my-md-4 header-links">
                    <a href="../php/logout.php" class="px-2 fas fas fa-sign-out-alt user-page">Logout</a>
                </p>
            </div>
        </div>
    </div>

       <div class="container-fluid p-0">
         <div class="row"></div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button 
            class="navbar-toggler" 
            type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="../index.html">Home</a>
              </li>

                
                <li class="nav-item">
                  <a class="nav-link" onclick="under_construction()" href="#">Computadores</a>
                </li>
                <li class="nav-item nav-item">
                  <a class="nav-link" >Sobre nós</a>
                  <span class="sr-only">(current)</span>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contato.html">Contato</a>
                </li>
            
              </ul>
            </div>
            <div class="navbar-nav">
                <li class="nav-item border rounded-circle mx-2 search-icon">
                  <i class="fas fa-search p-2"></i>
                </li>
                <li class="nav-item border rounded-circle mx-2 search-icon">
                  <i class="fas fa-shopping-basket p-2"></i>
                </li>
            </div>
          </nav>
       </div>
    </header>
  <!-- /Header-->
  <table>
  	<thead>
	  	<tr>
		  	<th>Name</th>
        <th>Email</th>
        <th>Cpf</th>
			  <th colspan="2">Action</th>
		  </tr>
  	</thead>
	
  	<?php //while ($resultado = mysqli_fetch_array($results)) { ?>
		  <tr>
		  	<td><?php echo $resultado['nome']; ?></td>
        <td><?php echo $resultado['email']; ?></td>
        <td><?php echo $resultado['cpf']; ?></td>
			  <td>
			  	<a href="profile.php?edit=<?php echo $resultado['id']; ?>" class="edit_btn">Editar</a>
		  	</td>
		  	<td>
		  		<a href="profile.php?del=<?php echo $resultado['id']; ?>" class="del_btn">Delete</a>
		  	</td>
	  	</tr>
  	<?php //} ?>
  </table>
  <form method="post" action="profile.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Name</label>
		<input type="text" name="nome" value="<?php echo $nome; ?>">
	</div>
	<div class="input-group">
		<label>email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="input-group">
		<label>Cpf</label>
		<input type="text" name="cpf" value="<?php echo $cpf; ?>">
	</div>
  
	<div class="input-group">

		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;">update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>

                
       
    


  

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://kit.fontawesome.com/5a9891bfba.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="../js/main.js"></script>
    </body>
</html>
