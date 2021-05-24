<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Usuários Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h4>Cadastro de Produtos</h4>		
				<form method="POST" action="cad.php">
					<label>Nome</label><br>
					<input type="text" class="form-control" name="nomeProduto" placeholder="Nome Produto"><br><br>

					<label>Quantidade</label><br>
					<input type="text" class="form-control" name="quantidadeProduto" placeholder="Quantidade de Produtos"><br><br>

					<label>Preço</label><br>
					<input type="text" class="form-control" name="precoProduto" placeholder="Preço do Produto"><br><br>

					<button class="btn btn-primary"> Cadastrar Produtos</button>

				</form>
			</div>
		</div>
	</div>	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>