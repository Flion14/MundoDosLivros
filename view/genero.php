<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>

<div class="d-flex my-4 align-content-between flex-wrap" style="width:100%; height:100%;">
	
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
		$consulta = "SELECT descricao, img_gen FROM genero where descricao like '%$pes%'"; 
	}else{
		$consulta = "SELECT descricao, img_gen FROM genero";
	}

	$consulta = mysqli_query($conexao, $consulta);
		while ($row_liv = mysqli_fetch_assoc($consulta)){
?>
	<div class="div1 text-end rounded m-3" style=" background-color: #E7DFB7; width: 35%; height:15vh; border-color:#aaa76e;">
  <a href="http://localhost:8080/Hamel/Livraria%20GeM/view/<?php echo $row_liv['descricao']?>.php">
    <div style="width:95%"class="div2 mt-1 d-flex justify-content-between align-content-center">
      <img style="height:15vh;" src="../img/<?php echo $row_liv['img_gen']?>">
			<h1 class="fs-1 mr-2 w-100"><?php echo $row_liv['descricao']?></h1>
		</div>
  </a>
	</div>
<?php

		}
?>

</div>

</div>


<?php
	
    require_once("../model/rodape.php");
?>