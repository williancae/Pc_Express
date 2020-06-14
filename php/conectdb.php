<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pcExpress";

$link = mysqli_connect($host,$user,$pass,$db);

    if(!$link){
        die("Falha na conexao: " . mysqli_connect_error());
    }else{  
       //echo "Conexao realizada com sucesso";
    }  
?>