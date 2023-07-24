<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
    $v = array(0=>5,
               1=>100,
               5=>26,
               8=>7);
    $v[] = "E"; //adiciona elemento
    unset($v[9]); //retira elemento
    foreach($v as $k =>$c){
        echo "O campo $k possui o conteudo $c <br/>";//associa o índice ao elemento
    }
    print_r($v);
    ?>
    </pre>

</div>
</body>
</html>