<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"/>
    </head>

        <body>
            <form method="POST" action="visualizarFun.php">
                Texto referencia: <input type='text' name='filtro'/>  <br/>
                Campo: <select name='campo'>
                            <option value="codigo"> Code </option>
                            <option value="nome"> Nome </option>
                            <option value="endereco"> Endereço </option>
                            <option value="cidade"> Cidade </option>
                            <option value="cpf"> CPF </option>
                            <option value="rg"> RG </option>
                            <option value="data_nasc"> Data de nascimento </option>
							<option value="email"> E-mail</option>
                            <option value="tel"> Telefone </option>
                        </select>
                        <br/>
                        <input type='submit' value='Visualizar'/>
            </form>
            <p><a href="../index.php">Voltar</a></p>
        </body>
</html>