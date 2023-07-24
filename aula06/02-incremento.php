<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title></title>
<body>
<div>
    <?php
    /*incremento e decremento*/
    $atual = $_GET["aa"];
    echo "<br/>O ano atual é $atual e o ano anterior é " . --$atual; //pre decremento
    ?>
</div>
</body>
</html>
