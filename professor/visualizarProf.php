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
                $database =new mysqli('localhost','root','','crud');

                $comando ="SELECT * FROM `professor` WHERE `$camp` LIKE '%$ref%';";
                $view = $database->query ( $comando );
                if($camp == ''){
                    echo("Nome não encontrado");
                }
                while($linha = $view-> fetch_assoc()){
                    
                    echo "<br/>Codigo: ".$linha["codigo"];
                    echo ("<br/>Nome: ".$linha["nome"]);
                    echo "<br/>Endereço: ".$linha["endereco"];
                    echo "<br/>Cidade: ".$linha["cidade"];
                    echo "<br/>CPF: ".$linha["cpf"];
                    echo "<br/>RG: ".$linha["rg"];
                    echo "<br/>Data de nascimento: ".$linha["data_nasc"];
                    echo "<br/>Email: ".$linha["email"];
                    echo "<br/>Telefone: ".$linha["telefone"];
                    echo "<br>";
                }
            ?>
			<p><a href="../index.php">Voltar</a></p>
    </body>
</html>