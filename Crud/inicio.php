<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="icon" href="./imagem/pokebola.png">        
        <title>Pokedex</title>
     
</head>


<style>
   body{
       
       background-image:url(./imagem/fundo.jpg);
       background-size:cover;

  }

  label{
        font-size: 22px;
        font-style: oblique;
    }
</style>


<body>


<center>
<img src="./imagem/chrza.webp" class="rounded float-left" alt="..." width="180px">
<img src="./imagem/logo.webp" class="rounded" alt="..." width="300px">
<img src="./imagem/but.gif" class="rounded float-right" alt="..." width="140px">
</center>
    
  <!--<  <marquee behavior="alternate" direction="right">

img src="pokebola.png" alt="" width="100px"></marquee>-->
<br>
<div class="container" style="margin-top: 40px">
        <form action = "capturar.php" method="POST">
          
            <div class="mb-3">
                <label><strong> Pokémon</strong></label>
                <input type="text" class="form-control" name="nomepok" placeholder="Insira o nome do Pokémon">
            </div>

            <div class="mb-3">
                <label><strong>Tipo</strong></label>
                <select class="form-select" name="tipo" aria-label="Default select example">
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
                <input type="number" class="form-control" name="level" placeholder="Insira o nível do Pokémon">
            </div>

            <div class="mb-3">
                <label><strong>Fraqueza</strong></label>
                <select class="form-select" name = "fraqueza">
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
            <center>
            <button type="submit" class="btn btn-warning btn-small"><strong> Capturar</strong></button>
        </form></center>
        </div>
        <marquee behavior="" direction="right">

        <img src="./imagem/PIKK.gif" alt="" width="200px"></marquee>





























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    
</body>
</html>