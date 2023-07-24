<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title></title>
<body>
<div>
    <?php
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $m = ($n1 + $n2)/2;
    echo "A média entre a nota $n1 e $n2 é $m <br/>";
    echo "A situação do aluno é " . ($sit = $m<6?"REPROVADO":"APROVADO");
    ?>
</div>
</body>
</html>
