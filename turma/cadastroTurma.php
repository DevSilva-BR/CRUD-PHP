<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Turma</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Sistema de Cadastro</h1>
		<p>Por Favor entre com os dados solicitados abaixo:</p>
		<form method="POST" action="bdcadastroTurma.php">
			<label>Nome:<input type="text" name="nome"/></label><br/>
			<label>Ano:<input type="text" name="ano"/></label><br/>
		
			<input type="submit" value="Cadastrar" />
		</form>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>