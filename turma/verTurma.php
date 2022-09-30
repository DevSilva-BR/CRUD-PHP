<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
</head>

<body>
    <form method="POST" action="visualizarTurma.php">
        Texto referencia: <input type='text' name='filtro' /> <br />
        Campo: <select name='campo'>
            <option value="codigo"> Code </option>
            <option value="nome"> Nome </option>
            <option value="ano"> ano </option>
        </select>
        <br />
        <input type='submit' value='Visualizar' />
    </form>
    <p><a href="../index.php">Voltar</a></p>
</body>

</html>