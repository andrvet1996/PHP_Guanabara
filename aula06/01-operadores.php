<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title></title>
<body>
<div>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ $preco";
    $preco += 0.1 * $preco;
    echo "<br/>O novo preço com 10% de aumento será R$ $preco" . number_format($preco, 2);
    $preco -= 0.1 * $preco;
    echo "<br/>O novo preco com 10% de desconto será R$ $preco" . number_format($preco, 2);
    ?>
</div>
</body>
</html>
