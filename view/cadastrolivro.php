<?php
	require_once("../model/conexao.php");
    require_once("../model/cabeca.php");
?>
<div class="d-flex justify-content-center my-3" style="width:100%;">
	<div class="d-flex justify-content-center card border-dark" style="width:45vh; height: 100%; background-color: #EEE8AA;">
	<div  class="mx-auto my-auto"style="width:27vh;">
		<form method="post" enctype="multipart/form-data" autocomplete="off">
        	<h3>Criar Livro</h3>
<!--qtd_estoque INTEGER,
nomVARCHAR(400),
preco DECIMAL(10,2),
cod_editora INTEGER,
promo INTEGER,
img VARCHAR(100),-->
          <label>Quantidade de Estoque:</label>
          <input type="number" name="quant" id="quant" required style="width:27vh; background-color: #FDF5E6;" class="rounded">

          <label>Título:</label>
          <input type="text" name="title" id="title" required style="width:27vh; background-color: #FDF5E6;" class="rounded">
          
          <label>Preço:</label>
          <input type="text" name="price" id="price" required style="width:27vh; background-color: #FDF5E6;" class="rounded">

          <label>Codigo Editora:</label>
          <input type="text" name="cod_ed" id="cod_ed" required style="width:27vh; background-color: #FDF5E6;"class="rounded">

          <label>Autor:</label>
          <input type="text" name="autor" id="autor" required style="width:27vh; background-color: #FDF5E6;"class="rounded">

          <label>Promoção</label>
          <input type="text" name="promo" id="promo" required style="width:27vh; background-color: #FDF5E6;" class="rounded mb-3">

          
          <label>Imagem .png</label>
          <div style="width:80%;"  class="d-flex justify-content-start rounded mb-3" >
          <input type="file" name="fid" class="input is-large text-break" accept="image/*" multiple/>
          </div>

          <input type="submit" value="Criar Livro" name="Cid" id="Cid" style="width:27vh; background-color: #FDF5E6;" class="rounded mb-3">
     
        	
        	
          
   		</form>
   	</div>
   	</div>
</div>

<?php
	
    require_once("../model/rodape.php");
?>

<?php
  $consulta="SELECT nome, preco, cod_editora, promo, img FROM livro;";
  $result=mysqli_query($conexao, $consulta);

  if(isset($_POST["title"]) && $_POST["title"] != "" && 
     isset($_POST['price']) && $_POST['price'] !="" && 
     isset($_POST['cod_ed']) && $_POST['cod_ed'] !="" && 
     isset($_POST['promo']) && $_POST['promo'] != "" ){
  

    $image= $_FILES['fid']['name'];

    $target = "../img/";

    $temp = explode(".", $_FILES['fid']['name']);

    $newfilename = $temp[0].round(microtime(true)) . '.' . end($temp);


    if($image == ""){
      $newfilename = 'imagem.png';
    }


  $sql="INSERT INTO livro(qtd_estoque, nome, preco, cod_editora, img, promo) VALUES ($_POST[quant], '$_POST[title]', $_POST[price], $_POST[cod_ed], '$newfilename', $_POST[promo]);";





    if($conexao->query($sql) === true){
    move_uploaded_file($_FILES['fid']['tmp_name'], $target.$newfilename);
    header('Location:index.php');
  }

      }
?>