<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Cadastro - Turma</h1>
		<p>
			<?php
				$nome = $_POST['nome'];	
				$ano = $_POST['ano'];	
				
				if($nome == "" or $ano == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='cadastro.php'>Cadastro</a></p>";
				}
				else{
					$mysqli = new mysqli('localhost', 'root', '', 'crud');
					$sql = "insert into turma values (null, '$nome', '$ano')";
					$result = $mysqli ->query($sql);
					echo "Usuário Cadastrado com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>