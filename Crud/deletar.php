<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deletar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="icon" href="./imagem/superball.png">
</head>
<style>
   body{
       
       background-image:url(./imagem/vulc.jpg);
       color: white;
       background-size:cover;

  }

  label{
        font-size: 22px;
        font-style: oblique;
    }
</style>



<?php

include "conexao2.php";

$idpok = $_GET['idpok'];

$sql = "DELETE FROM `pokemon` WHERE idpok = $idpok";

$deletar = mysqli_query($conexao2, $sql);

?>
<body>
    <br>
<center>
<h1> Pokemon Dispensado</h1>
<img src="./imagem/thau.gif" class="rounded float-left" alt="..." width="170px">
        <a href="listapok.php" role="button" class="btn btn-danger"><strong>MINHA POKEDEX</strong> </a>
        
        <a href="inicio.php" role="button" class="btn btn-success"><strong> CAPTURAR NOVO POKEMON</strong> </a>
        <img src="./imagem/snor.gif" class="rounded float-right" alt="..." width="200px">
        </center>
        <center>
        <img src="./imagem/evolu.gif" class="rounded float-left" alt="..." width="500px">
        </center>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
       
    </body>
</html>