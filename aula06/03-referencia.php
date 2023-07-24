<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title></title>
<body>
<div>
    <?php
   $a = 3;
   $b = &$a;//referencia de b a variavel a
   $b += 5;
    echo "<br/>A variável A vale $a";
    echo "<br/>A variável B vale $b";

    ?>
</div>
</body>
</html>
