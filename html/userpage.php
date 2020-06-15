<?php
// Conexão
require_once '../php/conectdb.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
	header('Location: login/login.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM login WHERE id = '$id'";
$resultado = mysqli_query($conexao, $sql);
//$dados = mysqli_fetch_array($resultado);
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

    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <!-- Custom Stylesheet-->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Slick-->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/favicon.ico" type="image/x-icon">

    </head>

<body style="background-image: url(../assets/wall.jpg); background-size: cover;">
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
                <li class="nav-item nav-item active">
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

  <!-- Dashborad-->
    <div class="user-navbar col-md-4 col-12 p-0 user-text">
      <div class="space-users">
      
      </div>
      <img src="../assets/user-icon.png"  class="user-image">
      <p style="padding-top: 10px;">User</p>
      <div class="link-space">
        <i class="fas fa-id-card"></i>
        <a  class="user-link " href="#">Profile</a><br>
      </div>
      <div class="link-space">
        <i class="fas fa-chart-pie"></i>
        <a  class="user-link" href="#">Analytcs</a><br>
      </div>
      <div class="link-space">
        <a  class="user-link " href="#"> Nhaa</a><br>
      </div>
      <div class="link-space">
        <a  class="user-link " href="#"> Nhaa</a><br>
      </div>
      <div class="link-space">
        <i class="fas fa-users"></i>
        <a  class="user-link " href="#"> Users Settings</a><br>
      </div>
  

    


  

        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://kit.fontawesome.com/5a9891bfba.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src=".. /js/main.js"></script>
    </body>
</html>
