<?php
// Conexão
require_once 'conectdb.php';


// Sessão


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


