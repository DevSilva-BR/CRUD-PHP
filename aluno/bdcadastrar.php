<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Cadastro - Aluno</h1>
		<p>
			<?php
				$nome = $_POST['nome'];	
				$end = $_POST['end'];	
				$cidade = $_POST['cidade'];	
				$cpf = $_POST['cpf'];	
				$rg = $_POST['rg'];	
				$ra = $_POST['ra'];	
				$data_nasc = $_POST['data_nasc'];	
				$email = $_POST['email'];
				$telefone = $_POST['telefone'];				
				
				if($nome == "" or $end == "" or $cidade == ""or $cpf == "" or $rg == "" or $ra == "" or $data_nasc == "" or $email == "" or $telefone == "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='cadastro.php'>Cadastro</a></p>";
				}
				else{
					$mysqli = new mysqli('localhost', 'root', '', 'crudescola');
					$sql = "insert into aluno values (null, '$nome', '$end', '$cidade', '$cpf', '$rg', '$ra', '$data_nasc', '$email', '$telefone')";
					//mostrar o resutado
					$result = $mysqli ->query($sql);
					echo "Usuário Cadastrado com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>