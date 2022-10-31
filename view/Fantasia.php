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
		$consulta = "select img, nome, preco, cod_genero FROM livro left join genero_livro on livro.cod_livro=genero_livro.cod_livro where cod_genero like 1 and nome like '%$pes%';";
	}else{
		$consulta = "select img, nome, preco, cod_genero FROM livro left join genero_livro on livro.cod_livro=genero_livro.cod_livro where cod_genero like 1;";
	}

	$consulta = mysqli_query($conexao, $consulta);
		while ($row_liv = mysqli_fetch_assoc($consulta)){
?>
	<div class="div1 text-center rounded m-3" style=" background-color: #E7DFB7; width: 26vh; height:50vh; border-color:#aaa76e;">
		<div class="div2 mt-1">
			<a href=""><img style="width: 24vh;height:36vh;" src="../img/<?php echo $row_liv['img']?>"></a>
			<p class="fs-6"><?php echo $row_liv['nome']?></p>
		</div>
		<div class="div3">
			
			<p class="fs-6 fw-semibold">R$<?php echo $row_liv['preco']?></p>
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