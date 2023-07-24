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
    $t = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus maximus ipsum et dui bibendum, sed posuere 
    ligula feugiat. Nunc a nisl eget turpis pharetra pharetra et eu ex. Quisque pharetra, metus vitae pulvinar congue,
    elit metus tincidunt tellus, id pretium nunc lectus id eros. Quisque non ex in diam pharetra lacinia semper et magna.
    Vestibulum nibh velit, bibendum nec arcu in, blandit tincidunt nisi. Sed a fringilla mauris. Sed fermentum sit 
    lectus ut accumsan";
    $r = wordwrap($t, 20, "<br/>\n");//quebra na tela e no código
    echo $r;
    ?>
</div>
</body>
</html>





