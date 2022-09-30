<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Turma Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Sistema de Cadastro</h1>
		<p>Por Favor entre com os dados solicitados abaixo:</p>
		<form method="POST" action="dbcadastroTaluno.php">
			<label>Codigo do ra -aluno:<input type="text" name="codAluno"/></label><br/>
			<label>Codigo-Turma:<input type="text" name="codTurma"/></label><br/>
		
			<input type="submit" value="Cadastrar" />
		</form>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>