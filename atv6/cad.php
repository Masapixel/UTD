<?php 
	$dados = $_GET;

	$dados = implode(" - ", $dados);

	$arquivo = fopen("users.txt", "a+");

	fwrite( $arquivo, $dados. "\n");

	fclose($arquivo);

 ?>