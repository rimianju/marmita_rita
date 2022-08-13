<?php

include('lib.php');

$comida = comida();


echo '<!DOCTYPE html>
<html lang="en">
<head>
  <title>Marmitas Dona Dirce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>



</head>
<body>

<div class="container-fluid">
<nav style="background-color: #db6868!important;" class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#"><img src="imagem/logo_marmita.png"  width="50" height="50"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Blog</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Conhece Dona Dirce</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="#">Contato</a>
  </li>
  </ul>
</div>
</nav>';

echo '<div class="container">';
echo '<div class="row col-sm">';
    foreach($comida as $comidas) {
        

       echo'<div style="padding: 9px; class="cols-4"><div class="card sm-col" style="width: 18rem;">
        <img class="card-img-top" src="'.$comidas['imagem'].'" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">'.$comidas['nome'].'</h5>
            <p class="card-text">'.$comidas['ingredientes'].'</p>
            <span>Tamanho: </span><p class="card-text">'.$comidas['tamanho'].'</p>
            <span>Preço: </span><p class="card-text">'.$comidas['preco'].'</p>
            <a href="marmita.php?id='.$comidas['id'].'" class="btn btn-primary">Compre</a>
        </div>
        </div></div>';

    }
  
echo '
</div>
</div>

<footer class="bg-light text-center text-lg-start">
  <div class="container p-4">
    <div class="row">
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Dedicação</h5>
        <p>
          Temos anos de experiência em levar o que tem de melhor em quentinhas para sua casa
        </p>
      </div>
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Experiência</h5>
        <p>
           Nossas quentinhas são feitas com qualidade e carinho de quem ama o que faz!
        </p>
      </div>
    </div>
  </div>
 
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   Site desenvolvido por: Raquel Santos
  </div>

</footer>

</body>
</html>';

?>