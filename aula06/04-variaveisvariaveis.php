<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="estilo.css"/>
    <title></title>
<body>
<div>
    <?php
    $x = "abc";
    $$x = "def";
    echo "<br/>O conteúdo da variável X é $x";
    echo "<br/>A variável ABC criada recebeu o valor $abc";
    ?>
</div>
</body>
</html>
