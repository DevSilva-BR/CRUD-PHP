<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8" />
	<title>Alterar - Aluno</title>
	<link href="style.css" rel="stylesheet" />
</head>

<body>
	<h1>Confirmação de Alteração - Aluno</h1>
	<p>

		<?php
		$codAluno = $_POST['codAluno'];
		$codTurma = $_POST['codTurma'];

		if ($codAluno == "" or $codTurma == "") {
			echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
		} else {

			$mysqli = new mysqli('localhost', 'root', '', 'crud');
			$sql = "UPDATE `turmaaluno` SET `codAluno`='$codAluno',`codTurma`='$codTurma";
			$result = $mysqli->query($sql);
			echo "Usuário Alterado com Sucesso!!!";
		}

		?>

	</p>
	<p><a href="../index.php">Voltar</a></p>
</body>

</html>