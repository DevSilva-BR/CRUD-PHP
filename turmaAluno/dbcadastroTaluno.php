<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Cadastro - Aluno</title>
	<link href="style.css" rel="stylesheet" />
</head>

<body>
	<h1>Confirmação de Cadastro - Turma</h1>
	<p>
		<?php
		$codAluno = $_POST['codAluno'];
		$codTurma = $_POST['codTurma'];

		if ($codAluno == "" or $codTurma == "") {
			echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
			echo "<p><a href='cadastroTaluno.php'>Cadastro</a></p>";
		} else {
			$mysqli = new mysqli('localhost', 'root', '', 'crud');
			$sql = "insert into turmaaluno values (null, '$codAluno', '$codTurma')";
			$result = $mysqli->query($sql);
			echo "Usuário Cadastrado com Sucesso!!!";
		}

		?>
	</p>
	<p><a href="../index.php">Voltar</a></p>
</body>

</html>