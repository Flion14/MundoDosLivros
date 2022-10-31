<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>

	<div class="d-flex justify-content-center" style="width:100%; height: 100%;">
		<div class="text-center w-75 my-5">
			<h2 class="border-top border-2 border-dark rounded" style="background-color: #f7f4d4;">Carrinho</h2>
			<div style=" height: 50vh;" class="border-top border-bottom border-2 border-dark">

				
			</div>
			<div class="border-bottom border-2 border-dark d-flex justify-content-between w-100 my-2">
				<h3 class="">Subtotal:</h3>

				<div class="d-flex justify-content-end w-100">
					<h5 class="mx-3">R$</h5>
					<a><h4>Finalizar Compra</h4></a>
				</div>
			</div>
		</div>
	</div>

<?php
    require_once("../model/rodape.php");
?>