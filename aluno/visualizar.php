<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Visualizar - ALUNOS</title>
		
	</head> 
	<body>
    <?php
            $ref = $_POST['filtro'];
            $camp = $_POST['campo'];

                if($camp == ''){
                    echo ("Campo invalido");
                }
                $mysqli =new mysqli('localhost','root','','crudescola');

                $comando ="SELECT * FROM `aluno` WHERE `$camp` LIKE '%$ref%';";

                $view = $mysqli->query ( $comando );
                if($camp == ''){
                    echo("Nome não encontrado");
                }
                    echo"<table border='1'>";
                    echo"<tr>";
                        echo "<td>Nome: </td>";
                        echo ("<td>Endereço: </td>");                    
                        echo "<td>Cidade: </td>";
                        echo "<td>CPF: </td>";
                        echo "<td>RG: </td>";
                        echo "<td>RA: </td>";
                        echo "<td>data_nasc: </td>";
                        echo "<td>email: </td>";
                        echo "<td>telefone: </td>";

                    echo"</tr>";

                    while($linha = $view-> fetch_assoc()){
                        echo"<tr>";
                        echo "<td>".$linha["nome"]."</td>";
                        echo "<td>".$linha["endereco"]."</td>";
                        echo "<td>".$linha["cidade"]."</td>";
                        echo "<td>".$linha["cpf"]."</td>";
                        echo "<td>".$linha["rg"]."</td>";
                        echo "<td>".$linha["ra"]."</td>";
                        echo "<td>".$linha["data_nasc"]."</td>";
                        echo "<td>".$linha["email"]."</td>";
                        echo "<td>".$linha["telefone"]."</td>";

                        echo"<td><form method='POST' action='alterar.php'>
                                    <input type='hidden' name='codigo' value='".$linha["ra"]."'/><br/>
                                    <input type='submit' value='Alterar' />
                                </form></td>";
                        echo"<td><form method='POST' action='deletar.php'>
                                    <input type='hidden' name='codigo' value='".$linha["ra"]."'/><br/>
                                    <input type='submit' value='Excluir' />
                                </form></td>";
                        echo"</tr>";
                    }
                    echo"</table>";
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>