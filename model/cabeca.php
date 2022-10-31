<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Livraria Mundo dos Livros</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body class="d-flex align-content-between flex-wrap" style="width: 100%;height:100%;background-color: #FDF5E6;">

<nav class="navbar gap-3" style="background-color: #EEE8AA; width: 100%; height: 28vh;">

  <div class="container-fluid ">

    <form class="d-flex" role="search" style="width: 33vh;">
      <input name="pesq"class="rounded-pill form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search" style="height:5vh; width:45vh; background-color: #FDF5E6; border-color: #aaa76e;">
    </form>

    <div style="height: 10%;">
    <img src="../img/mdl.png" class="rounded-4 d-block" style="height:20vh; border-color:#aaa76e;">
    </div>

    <div class="d-flex flex-row-reverse justify-content-around" style="width: 33vh;">
        <a href="http/../cadastrousuario.php"><img src="../img/Login.png" class="rounded d-block" style="height: 12vh; border-color:#aaa76e;"></a>
        <a href="http/../carrinho.php"><img src="../img/Carrinho.png" class="rounded d-block" style="height: 12vh; border-color:#aaa76e;"></a>
    </div>
  </div>

  <div style="width: 100%;" class="d-flex justify-content-around ">

    <a class="btn rounded-start rounded-0" href="http/../index.php" role="button" style="background-color: #FDF5E6; width:25%; border-color:#aaa76e;">Página Inicial</a>

    <a class="btn  rounded-0" href="http/../genero.php" role="button" style="background-color: #FDF5E6; width:25%; border-color:#aaa76e;">Gêneros</a>

    <a class="btn  rounded-0" href="http/../Lancamentos.php" role="button" style="background-color: #FDF5E6; width:25%; border-color:#aaa76e;">Lançamentos</a>

    <a class="btn rounded-end  rounded-0" href="#" role="button" style="background-color: #FDF5E6; width:25%; border-color:#aaa76e;">
    Promoções</a>
    
  </div>
</nav>
