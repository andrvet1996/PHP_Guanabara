<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $frase = "Gosto de estudar Biologia Molecular";
    $nova_frase = str_replace("Molecular", "Celular", $frase);
    echo "$nova_frase";
    ?>
</div>
</body>
</html>





