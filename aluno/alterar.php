<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Alterar - ALUNOS</title>
		
	</head> 
	<body>
		<h1>altera dados - alunos</h1>
    <?php
            $codigo = $_POST['codigo'];


                if($codigo == ''){
                    echo ("Campo invalido");
                }
				else{
					$mysqli =new mysqli('localhost','root','','crudescola');

					$comando ="SELECT * FROM `aluno` WHERE ra = '$codigo'";
					$view = $mysqli->query ( $comando );
					$linha = $view-> fetch_assoc();
					echo ("<form method='POST' action='mudar.php'>");
					echo ("	<label>Nome:<input type='text' name='nome' value='".$linha["nome"]."'/></label><br/>");
					echo ("	<label>Endereço:<input type='text' name='endereco' value='".$linha["endereco"]."'/></label><br/>");
					echo ("	<label>Cidade:<input type='text' name='cidade' value='".$linha["cidade"]."'/></label><br/>");
					echo ("	<label>CPF:<input type='text' name='cpf' value='".$linha["cpf"]."'/></label><br/>");
					echo ("	<label>RG:<input type='text' name='rg' value='".$linha["rg"]."'/></label><br/>");
					echo ("	<label>RA:<input type='text' name='ra' value='".$linha["ra"]."'/></label><br/>");
					echo ("	<label>Data de Nascimento:<input type='text' name='data_nasc' value='".$linha["data_nasc"]."'/></label><br/>");
					echo ("	<label>E-Mail:<input type='text' name='email' value='".$linha["email"]."'/></label><br/>");
					echo ("	<label>Telefone:<input type='text' name='telefone' value='".$linha["telefone"]."'/></label><br/>");
					echo ("	<input type='submit' value='Alterar' />");
					echo ("</form>");										
				}
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>