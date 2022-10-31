<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>
<div class="d-flex justify-content-center my-5" style="width:100%;">
	<div class="d-flex justify-content-center card border-dark" style="width:35vh; height: 60vh; background-color: #EEE8AA;">
	<div  class="d-flex mx-auto my-auto justify-content-center"style="width:32vh;">
		<form method="post" enctype="multipart/form-data" autocomplete="off">
        	<h3>Entrar na Conta</h3>
        	
          <label>Nome:</label>
          <input type="text" name="name" id="name" required style="width:32vh; background-color: #FDF5E6;" class="rounded">
          
          <label>Email:</label>
          <input type="text" name="email" id="email" required style="width:32vh; background-color: #FDF5E6;" class="rounded">

          <label>CPF:</label>
          <input type="text" name="CPF" id="CPF" required style="width:32vh; background-color: #FDF5E6;"class="rounded">

          <label>Senha:</label>
          <input type="password" name="senha" id="senha" required style="width:32vh; background-color: #FDF5E6;" class="rounded mb-3">

          
          <input type="submit" value="Entrar" name="Cid" id="Cid" style="width:32vh; background-color: #FDF5E6;" class="rounded mb-3">
          
   		</form>
   	</div>
   	</div>
</div>

<?php
	
    require_once("../model/rodape.php");
?>

