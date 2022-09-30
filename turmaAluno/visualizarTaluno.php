<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Visualizar - Turma Aluno</title>

</head>

<body>
    <?php
    $ref = $_POST['filtro'];
    $camp = $_POST['campo'];

    if ($camp == '') {
        echo ("Campo invalido");
    }
    $database = new mysqli('localhost', 'root', '', 'crud');

    $comando = "SELECT turmaaluno.codigo as codigo, turma.nome as turma, aluno.nome as aluno 
    From turmaaluno inner join turma on turmaaluno.codTurma = turma.codigo inner join aluno 
    on turmaaluno.codAluno = aluno.ra  WHERE `$camp` LIKE '%$ref%';";
    $view = $database->query($comando);
    if ($camp == '') {
        echo ("Nome não encontrado");
    }
    while ($linha = $view->fetch_assoc()) {
        echo "<br/>Codigo: " . $linha["codigo"];
        echo "<br/>Codgo aluno: " . $linha["turma"];
        echo "<br/>Codigo Turma: " . $linha["aluno"];
        echo "<br>";
    }
    ?>
    <p><a href="../index.php">Voltar</a></p>
</body>

</html>