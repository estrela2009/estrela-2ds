<?php 
	include('conexao.php');
?>

<link rel="stylesheet" href="style.css">
<ul>
	<li><a href="categorias.html">Categorias</a></li>
	<li><a href="filmes.html">Filmes</a></li>
</ul>
<main id="categorias">
	<form method="get">
		<h2>Categorias</h2>
		<input type="text" name="categorias" placeholder="Nome Categoria...">
		<button name="salvar">Salvar</button>
	</form>
</main>

<?php

	if(isset($_GET['salvar'])){
		$nomeCategoria = $_GET['categorias'];

		 $sql = "INSERT INTO categorias (nome) values ('$nomeCategoria')";

		 if($conn->query($sql)){
		 	echo "";
		 }else {
		 	echo "Deu ruim";
		 }
		 /*Buscar dados da tabela categoria*/
		 $sql = "SELECT * FROM categorias";
		 $resultado = $conn->query($sql);

		while ($obj = $resultado->fetch_assoc()) {
			echo $obj['id']."-".$obj['nome'].
			"<a href='?editar=".$obj['id']."'>Editar</a><br>";
		}
		/*editar uma categoria*/
		if(isset($_GET['editar'])){
			echo  "entrou, lá ele";
		}


	}

	
 ?>