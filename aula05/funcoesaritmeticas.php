<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Funções aritméticas em PHP</title>
    <style>
        h2 {
            font: 15pt Arial;
            color:#0000fa;
            font weight:bold;
        }
    </style>
<body>
<div>
    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];
    echo "<h2> Valores recebidos: $v1 e $v2 </h2>";
    echo "O valor absoluto de $v2 é ". abs($v2);
    echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);
    echo "<br/>A raiz quadrada de $v1 é ". sqrt($v1);
    echo "<br/>O valor arredondado de $v2 é ". round($v2); //ceil arredonda para cima e floor arredonda para baixo
    echo "<br/>A parte inteira de $v2 é ". intval($v2);
    echo "<br/>O valor arredondado de $v1 em moeda é R$". number_format($v1, 2,",", ".");
    ?>
</div>
</body>
</html>
