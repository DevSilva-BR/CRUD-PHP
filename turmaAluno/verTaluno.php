<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="utf-8"/>
    </head>

        <body>
            <form method="POST" action="visualizarTaluno.php">
                Texto referencia: <input type='text' name='filtro'/>  <br/>
                Campo: <select name='campo'>
                            <option value="codAluno"> Codigo do Aluno </option>
                            <option value="codTurma"> codigo da Turma </option>
                        </select>
                        <br/>
                        <input type='submit' value='Visualizar'/>
            </form>
            <p><a href="../index.php">Voltar</a></p>
        </body>
</html>