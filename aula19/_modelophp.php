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
    $a = 10;
    $b = "10";
    if ($a == $b)
        print "caso 1";
    else
        print "caso 2";

    if ($a === $b) {
        print "caso 3";
    } else {
        print "caso 4";
    }
    ?>
</div>
</body>
</html>
 