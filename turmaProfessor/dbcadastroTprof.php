<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Cadastro - Turma Professor</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de Cadastro - Turma Professor</h1>
		<p>
			<?php	
				$codProf = $_POST['codProfessor'];	
				$codTurma= $_POST['codTurma'];	
				
				if($codProf == "" or $codTurma== "")
				{
					echo "Campos Obrigatórios em branco, preencha corretamente ....<br/>";
					echo "<p><a href='cadastroTprof.php'>Cadastro</a></p>";
				}
				else{
					$mysqli = new mysqli('localhost', 'root', '', 'crud');
					$sql = "insert into turmaprofessor values (null, '$codTurma', '$codProf')";
					$result = $mysqli ->query($sql);
					echo "Usuário Cadastrado com Sucesso!!!";
				}
				
			?>
		</p>
		<p><a href="../index.php">Voltar</a></p>
	</body>
</html>