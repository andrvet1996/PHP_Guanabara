<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title>Operações aritméticas</title>
<body>
<div>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    echo "<h2>Valores recebidos: $n1 e $n2</h2>.";
    $media = ($n1 + $n2) / 2;
    echo "A soma vale ". ($n1 + $n2);
    echo "<br/> A subtração vale ". ($n1 - $n2);
    echo "<br/> A multiplicação vale ". ($n1 * $n2);
    echo "<br/> A divisão vale ". ($n1 / $n2);
    echo "<br/> O módulo vale ". ($n1 % $n2);
    echo "<br/> A média vale $media"
    ?>
</div>
</body>
</html>
