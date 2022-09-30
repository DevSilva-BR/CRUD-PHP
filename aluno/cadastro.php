<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Sistema de Cadastro</h1>
		<p>Por Favor entre com os dados solicitados abaixo:</p>
		<form method="POST" action="bdcadastrar.php">
			<label>Nome:<input type="text" name="nome"/></label><br/>
			<label>Endereço:<input type="text" name="end"/></label><br/>
			<label>Cidade:<input type="text" name="cidade"/></label><br/>
			<label>CPF:<input type="text" name="cpf"/></label><br/>
			<label>RG:<input type="text" name="rg"/></label><br/>
			<label>RA:<input type="text" name="ra"/></label><br/>
			<label>Data de Nascimento:<input type="text" name="data_nasc"/></label><br/>
			<label>E-Mail:<input type="text" name="email"/></label><br/>
			<label>Telefone:<input type="text" name="telefone"/></label><br/>
			<input type="submit" value="Cadastrar" />
		</form>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>