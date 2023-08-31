<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Pokemons</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="./imagem/pokeballs.png">
</head>
<style>

body{
  background-image: url(./imagem/dark.jpg);
  color:white;
  font-style: oblique;
  background-size:cover;

    }
    table{
        color: white;
    }
    th{
        color: white;
        font-size: 25px;
        font-style: oblique;
    }
    td{
        color: white;
        font-size: 18px;
    }
</style>

<body>
    <div class = "container" style="margin-top:40px">
    <center>
<img src="./imagem/mew.gif" class="rounded float-left" alt="..." width="180px">
<img src="./imagem/logo.webp" class="rounded" alt="..." width="300px">
<img src="./imagem/fan.gif" class="rounded float-right" alt="..." width="140px">
</center>
    <br>

    <table class="table">
        <thead>
            <tr>
                
                <th scope="col">Nome Pokemon</th>
                <th scope="col">Tipo</th>
                <th scope="col">Level</th>
                <th scope="col">Fraqueza</th>
                <th scope="col">Ações</th>
                
            </tr>
        </thead>

        <tr>
            <?php
            include "conexao2.php";
            $sql = "SELECT * FROM `pokemon`";
            $busca = mysqli_query($conexao2, $sql);

            while ($array = mysqli_fetch_array($busca)){

                $idpok = $array['idpok'];  
                $nomepok = $array['nomepok'];
                $tipo = $array['tipo'];
                $level = $array['level'];
                $fraqueza = $array['fraqueza'];
                

                ?>
                
               

                <td><?php echo $nomepok?></td>

                <td><?php echo $tipo?></td>

                <td><?php echo $level?></td>

                <td><?php echo $fraqueza?></td>


                <td><a class="btn btn-success" href="editar.php?idpok=<?php echo $idpok?>" 
                role="button"><strong> Evoluir </strong></a>
                <a class="btn btn-danger" href="deletar.php?idpok=<?php echo $idpok?>" 
                role="button"><strong> Dispensar</strong></a>
                </td>
            
        </tr>

        <?php } ?>
    
            </div>
            </table>
            <img src="./imagem/snor.webp" class="rounded float-right" alt="..." width="140px">




 


</body>
</html>