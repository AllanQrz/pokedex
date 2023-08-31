<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturar</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="./imagem/bola-ultra.png">
</head>
<style>
   body{
       
       background-image:url(./imagem/wall.jpg);
       font-style: oblique;
       font-size: 30px;
       background-size:cover;
  }

  label{
        font-size: 30px;
        font-style: oblique;
    }
</style>


<body>
<br>
<center>
   <div style="padding-top: 20px">
   <br>
    <h4><strong> POKEMON CAPTURADO!</strong></h4> <br>
    
   <div style="padding-top: 20px">
   <img src="./imagem/snor.gif" class="rounded float-left" alt="..." width="200px">
        <a href="inicio.php" role="button" 
        class="btn btn-sm btn-primary"><strong> CAPTURAR NOVO POKEMON</strong></a>
        <img src="./imagem/miau2.gif" class="rounded float-right" alt="..." width="200px">
</div>
<br>
    </div></center>
   <center>
     <img src="./imagem/sphe.gif" class="rounded float-left" alt="..." width="200px">
     <a href="listapok.php" role="button" class="btn btn-success"><strong> MINHA POKEDEX</strong></a>
     <img src="./imagem/bel.gif" class="rounded float-right" alt="..." width="200px">
</center>
<?php

include "conexao2.php";

$nomepok = $_POST['nomepok'];
$tipo = $_POST['tipo'];
$level = $_POST['level'];
$fraqueza = $_POST['fraqueza'];


$sql = "INSERT INTO `pokemon`(`nomepok`, `tipo`, `level`, `fraqueza`) VALUES ('$nomepok','$tipo',$level,'$fraqueza')";

$inserir = mysqli_query($conexao2, $sql);

?>
<!--<marquee behavior="" direction="">-->
<br>
     
<center>
<img src="./imagem/cinda.png" class="rounded float-left" alt="..." width="280px">
<img src="./imagem/tree.png" class="rounded" alt="..." width="300px">
<img src="./imagem/squir.png" class="rounded float-right" alt="..." width="280px">
</center>
    </body>
</html>