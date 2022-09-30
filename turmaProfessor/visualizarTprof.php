<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>Visualizar - Turma Professor</title>

</head>

<body>
    <?php
    $ref = $_POST['filtro'];
    $camp = $_POST['campo'];

    if ($camp == '') {
        echo ("Campo invalido");
    }
    $database = new mysqli('localhost', 'root', '', 'crud');

    $comando = "SELECT turmaprofessor.codigo as codigo, turmaprofessor.codProfessor as turma, professor.nome as professor 
    From turmaprofessor inner join turma on turmaprofessor.codTurma = turma.codigo inner join professor 
    on turmaprofessor.codProfessor = professor.codigo WHERE `$camp` LIKE '%$ref%';";
    $view = $database->query($comando);
    if ($camp == '') {
        echo ("Nome não encontrado");
    }
    while ($linha = $view->fetch_assoc()) {
        echo "<br/>Codigo: " . $linha["codigo"];
        echo "<br/>Codgo turma: " . $linha["turma"];
        echo "<br/>Codigo professor: " . $linha["professor"];
        echo "<br>";
    }
    ?>
    <p><a href="../index.php">Voltar</a></p>
</body>

</html>