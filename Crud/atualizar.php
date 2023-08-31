<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
       
        <title>Evolução</title>
     <link rel="icon" href="./imagem/psyduck.png">
</head>
<style>
   body{
       
       background-image:url(./imagem/flor.jpg);
       color:white;
       background-size:cover;

  }

  label{
        font-size: 22px;
        font-style: oblique;
    }
</style>
<body>

<?php

include "conexao2.php";

$idpok = $_POST['idpok'];
$nomepok = $_POST['nomepok'];
$tipo = $_POST['tipo'];
$level = $_POST['level'];
$fraqueza = $_POST['fraqueza'];


 $sql = "UPDATE `pokemon` SET `nomepok`= '$nomepok',
 `tipo`= '$tipo', `level`='$level',
  `fraqueza`= '$fraqueza'
 WHERE idpok =$idpok";


 $atualizar = mysqli_query($conexao2, $sql);

 ?>
 <div style="padding-top: 20px">
 <center>

 <h1>Seu <?php echo $nomepok?> evoluiu com sucesso!</h1> <br><br>
 <img src="./imagem/snor.webp" class="rounded float-left" alt="..." width="200px">
 <a href="inicio.php" role="button" 
        class="btn btn-sm btn-primary"><strong> CAPTURAR NOVO POKEMON</strong></a>
        <img src="./imagem/char.png" class="rounded float-right" alt="..." width="200px">
 </center></div> <br>
<center>
 <img src="./imagem/thau.gif" class="rounded float-left" alt="..." width="200px">
 <a href="listapok.php" role="button" 
        class="btn btn-sm btn-success"><strong> MINHA POKEDEX</strong></a>
        <img src="./imagem/bull.webp" class="rounded float-right" alt="..." width="200px">
        </center>

        
        

 </body>
</html>

