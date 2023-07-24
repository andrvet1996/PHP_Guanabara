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
       $v = array(2=>"A", 5=>"J",0=>"M",3=>"X",4=>"K");
       krsort($v);//contrário do ksort()
       //ksort($v);//ordena os elementos a partir dos seus índices
       //arsort($v);//contrário do sort()
       //asort($v);//ordena os elementos e muda índices
       //rsort($v);//contrário do sort()
       //sort($v);//ordena os elementos do vetor
       //array_shift($v);//elimina primeiro elemento do vetor
       //array_unshift($v,"*");//coloca elementos no início do vetor
       //array_pop($v);//retira o ultimo elemento do vetor
       //array_push($v, "*");
       //$v[] = "*";//=array_push
       print_r($v);
    ?>
    </pre>
</div>
</body>
</html>
 