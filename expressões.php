<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2> Operadores comparação (resultado booleano) </h2>
    <ul>
     <li> maior  &gt; </li>
     <li> menor  &lt; </li>
     <li> maior e igual &gt; = </li>
     <li> menor e igual = &lt; </li>
     <li> igual == </li>
     <li> diferente != </li>
     <li> negação !() </li>
</ul>
<?php
 //Maior que >
    $anoatual = 2022;
    $anonasc = 2004;
    $idade= $anoatual-$anonasc;

    $resultado = $idade > 18; //false

     echo "<p>Tipo de booleano 'maior' " . (int)$resultado . "</p>";

    $resultado = $idade >= 18; //false

     echo "<p>Tipo de booleano 'maior e igual' " . (int)$resultado . "</p>";
    
 //Menor que <
    $a = 10;
    $b = 10;

    $C = $a < $b;
     echo "\$C = " . (int) $C;
     echo "<br>";

 //Menor e igual que <=
    $C = $a <= $b;
     echo "\$C = " . (int) $C;
     echo "<br>";

 //Igual ==
    $C = $a == $b;
     echo "\$C = " . (int) $C;
     echo "<br>";

 //Diferente !=
    $a = 30;
    $b = 40 ;
    $C = $a!=$b; //1= TRUE 0=FALSE
     echo "\$C = " . (int) $C; //1
     echo "<br>";
     
    //Negação !()
    $C = !($a==$b) ; // 1= TRUE 0=FALSE
     echo "\$C = " . (int) $C; //1
     echo "<br>";

    $C = !(false) ; // 1= TRUE 0=FALSE
     echo "\$C = " . (int) $C; //1
     echo "<br>";

    //

?>

</body>
</html>