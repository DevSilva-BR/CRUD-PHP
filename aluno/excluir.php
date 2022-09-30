<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>excluir - Aluno</title>
		<link href="style.css" rel="stylesheet"/>
	</head>
	<body>
		<h1>Confirmação de excluir - Aluno</h1>

		<p>
			<?php
                $ra = $_POST['ra'];
				$mysqli = new mysqli('localhost', 'root', '', 'crudescola');
                 $sql = "delete from aluno where ra = $ra";
                 $result = $mysqli -> query($sql);
                 echo ('<p>Usuario excluido com Sucesso!</p>');
					
			?>

				
		</p>
	
	</form>
	</body>
</html>