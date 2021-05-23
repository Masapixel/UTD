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
				<h4>Cadastro de Usuário</h4>		
				<form method="GET" action="cad.php">
					<label>Nome de Usuário</label><br>
					<input type="text" class="form-control" name="nomeUsuario" placeholder="Nome de Usuário"><br><br>

					<label>Idade do Usuário</label><br>
					<input type="text" class="form-control" name="idadeUsuario" placeholder="Idade do Usuário"><br><br>

					<label>Login</label><br>
					<input type="text" class="form-control" name="loginUsuario" placeholder="Login"><br><br>

					<label>Senha</label><br>
					<input type="text" class="form-control" name="senhaUsuario" placeholder="Senha"><br><br>

					<button class="btn btn-primary"> Cadastrar Usuário</button>

				</form>
			</div>
		</div>
	</div>	

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>
