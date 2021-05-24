<?php 
	$dados = $_POST;

	$dados = implode(" - ", $dados);

	$arquivo = fopen("alunos.txt", "a+");

	fwrite( $arquivo, $dados. "\n");

	fclose($arquivo);

	header("location: exibir.php");

 ?>