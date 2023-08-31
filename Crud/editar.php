

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Evoluir</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="./imagem/pikachu.png">
</head>
<style>
   body{
       
       background-image:url(./imagem/fundr.jpg);
       color:white;
       font-style: oblique;
       background-size:cover;

  }

  label{
        font-size: 22px;
        font-style: oblique;
    }
</style>

<body>
<div style="padding-top: 20px">
<center>
<img src="./imagem/pid.png" class="rounded float-left" alt="..." width="180px">
<img src="./imagem/logo.webp" class="rounded" alt="..." width="300px">
<img src="./imagem/rai.gif" class="rounded float-right" alt="..." width="180px">
</center>
</div>
    
    <div class= "container" style="margin-top:40px">
      <form action="atualizar.php" method="POST">
      
      <?php
      include "conexao2.php";

      $idpok = $_GET["idpok"];

      $sql = "SELECT * FROM `pokemon` WHERE idpok = $idpok";

      $buscar = mysqli_query($conexao2, $sql);

      while ($array = mysqli_fetch_array($buscar)){

        $idpok = $array['idpok'];        
        $nomepok = $array['nomepok'];
        $tipo = $array['tipo'];
        $level = $array['level'];
        $fraqueza = $array['fraqueza'];
        

        ?>
         <div class="container" style="margin-top: 40px">
         <form action="atualizar.php" method="post">
       
            <div class="mb-3">
                <label><strong>Pokemon</strong></label>
                <input type="text" class="form-control" name="nomepok" placeholder="Insira o nome do seu novo pokemon" 
                value= "<?php echo $nomepok?>">
                
                <input type="number" class="form-control" name="idpok"  
                value= "<?php echo $idpok?>"style="display: none">
            </div>

            

            <div class="mb-3">
                <label><strong>Tipo</strong></label>
                <select class="form-select" name="tipo" aria-label="Default select example" value = "<?php echo $tipo?>">
                <option>Água</option>
                    <option>Elétrico</option>
                    <option>Fantasma</option>
                    <option>Fogo</option>
                    <option>Grama</option>
                    <option>Inseto</option>
                    <option>Normal</option>
                    <option>Psiquico</option> 
                    <option>Terra</option>  
                </select>
            </div>

            <div class="mb-3">
                <label><strong>Level</strong></label>
                <input type="number" class="form-control" name="level" placeholder="Insira o nivel do pokemon" value= "<?php echo $level?>">
            </div>

            <div class="mb-3">
                <label><strong>Fraqueza</strong></label>
                <select class="form-select" name = "fraqueza" value = "<?php echo $fraqueza?>">
                <option>Água</option>
                    <option>Elétrico</option>
                    <option>Fantasma</option>
                    <option>Fogo</option>
                    <option>Grama</option>
                    <option>Inseto</option>
                    <option>Normal</option>
                    <option>Psiquico</option> 
                    <option>Terra</option>  
                </select>

            </div>
           <center> <button type="submit" class="btn btn-primary btn-small"><strong>Evoluir</strong></button>
        </center>
        
      <?php } ?>

        </div>



      
      </form>
      </div>
      <img src="./imagem/miau.gif" class="rounded float-right" alt="..." width="200px">
</body>
</html>