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
                $codigo = $_POST['codigo'];
                

				$mysqli = new mysqli('localhost', 'root', '', 'crud');

                 $sql = "select * from turma where codigo = $codigo";
                 $result = $mysqli -> query($sql);
				 $linha = $result -> fetch_assoc();
				 	echo"Codigo: <input type='text' name='codigo' value='$linha[codigo]'/></label><br/>";
				 	echo"nome: <input type='text' name='nome' value='$linha[nome]'/></label><br/>";
					 echo"ano: <input type='text' name='ano' value='$linha[ano]'/></label><br/>";
					echo("<form method='POST' action='excluirTurma.php'>
						<input type='hidden' name='codigo' value='$codigo'/></label><br/>
						<input type='submit' value='Excluir' />
						</form>");			
			?>

				
		</p>
	
	</form>
	</body>
</html>