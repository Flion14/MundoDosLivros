<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>

<div class="d-flex my-4 align-content-between flex-wrap" style="width:100%; min-height:100vh; max-height: 1000vh;">
	
  <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" style="width:100%;heigth:28vh;">
  <div class="carousel-inner rounded" style="width:100%;heigth:28vh;border:#aaa76e 3px 3px 0px 0px;">
    <div class="carousel-item active">
      <a href="#"><img src="../img/Promo1.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="#"><img src="../img/Promo2.png" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
      <a href="#"><img src="../img/Promo3.png" class="d-block w-100" alt="..."></a>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" style="height:34vh;" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" style="height:34vh;" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="d-flex m-4 flex-wrap justify-content-around" style="width:100%;">
<?php
	if(isset($_GET['pesq']) && $_GET['pesq'] != ""){
		$pes = $_GET['pesq'];
		$consulta = "SELECT img, nome, preco, nome_autor, livro.cod_livro FROM livro left join autor_livro on livro.cod_livro=autor_livro.cod_livro left join autor on autor.cod_autor=autor_livro.cod_autor where nome like '%$pes%' order by cod_livro desc limit 12";
	}else{
		$consulta = "SELECT img, nome, preco, nome_autor, livro.cod_livro FROM livro left join autor_livro on livro.cod_livro=autor_livro.cod_livro left join autor on autor.cod_autor=autor_livro.cod_autor order by cod_livro desc limit 12";
	}

	$consulta = mysqli_query($conexao, $consulta);
		while ($row_liv = mysqli_fetch_assoc($consulta)){
?>
	<div class="div1 text-start rounded m-3 d-flex justify-content-startbetween" style="background-color: #E7DFB7; width: 45%; height:15%; border-color:#aaa76e;">
		<a href=""><img class="rounded"style="width: 24vh;height:100%;" src="../img/<?php echo $row_liv['img']?>"></a>
		<div class="div2 mt-5 mx-2">
			<div><p class="fs-5"><?php echo $row_liv['nome']?></p></div>
			<div><p class="fs-5">R$ <?php echo $row_liv['preco']?></p></div>
			<div><p class="fs-5"><?php echo $row_liv['nome_autor']?></p></div>
		</div>
		
		
	</div>
<?php

		}
?>

</div>

</div>

<?php
	
    require_once("../model/rodape.php");
?>