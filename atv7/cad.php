<?php 
	$dados = $_POST;

	$dados = implode(" - ", $dados);

	$arquivo = fopen("produtos.txt", "a+");

	fwrite( $arquivo, $dados. "\n");

	fclose($arquivo);

	header("location: exibir.php");

 ?>