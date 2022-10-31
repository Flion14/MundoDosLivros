<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>
<div class="d-flex justify-content-center my-3" style="width:100%;">
	<div class="d-flex justify-content-center card border-dark" style="width:37vh; height: 60vh; background-color: #EEE8AA;">
	<div  class="mx-auto my-auto"style="width:27vh;">
		<form method="post" enctype="multipart/form-data" autocomplete="off">
        	<h3>Criar Usuario</h3>
        	
          <label>Nome:</label>
          <input type="text" name="name" id="name" required style="width:27vh; background-color: #FDF5E6;" class="rounded">
          
          <label>Email:</label>
          <input type="text" name="email" id="email" required style="width:27vh; background-color: #FDF5E6;" class="rounded">

          <label>CPF:</label>
          <input type="text" name="CPF" id="CPF" required style="width:27vh; background-color: #FDF5E6;"class="rounded">

          <label>Senha:</label>
          <input type="password" name="senha" id="senha" required style="width:27vh; background-color: #FDF5E6;" class="rounded mb-3">

          
          <input type="submit" value="Criar Conta" name="Cid" id="Cid" style="width:27vh; background-color: #FDF5E6;" class="rounded mb-3">
          <a class="btn rounded border-dark border border-2" href="http://localhost:8080/Hamel/Livraria%20GeM/view/Login.php" role="button" style="background-color: #FDF5E6; width: 27vh;">Entrar em Conta Existente</a>
     
        	
        	
          
   		</form>
   	</div>
   	</div>
</div>

<?php
	
    require_once("../model/rodape.php");
?>

<?php
  $consulta="SELECT nome_usuario, cpf, email, senha from usuario;";
  $result=mysqli_query($conexao, $consulta);

  if(isset($_POST["name"]) && $_POST["name"] != "" && 
     isset($_POST['email']) && $_POST['email'] !="" && 
     isset($_POST['CPF']) && $_POST['CPF'] !="" && 
     isset($_POST['senha']) && $_POST['senha'] != ""){
  
  $sql="INSERT INTO usuario(nome_usuario, cpf, email, senha) VALUES('$_POST[name]','$_POST[CPF]','$_POST[email]','$_POST[senha]');";



    if($conexao->query($sql) === true){
    
   
  }

      }
?>