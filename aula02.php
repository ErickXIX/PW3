<?php
// fazer arquivo puro de php

//operadores atiméticos

 /*
  + soma
  - subtração
  * multiplicação
  / divisão
  % modulo (divide e pega o resto )
 */

    // adição (= atribuir, receba, armazena)
     $num = 20;
     $num2 = 10;
     $res ;

     $res = $num + $num2 ; // 30

     echo "O resultado da adição de $num + $num2 = $res";
    
     echo "<br>";

     $res = $num + 100;
     echo "O resultado de $num + 100 = $res";

     $res = $num2 + "1000";
     echo "<br>";
     echo "<p> O resultado é " . $res."</p>";

    //subtração
     $num = 1000;
     $num2 = 99;
     $res = $num - $num2;

     print("<br>");
     print "<blockquote> O resultado da subtração
      é " . $res."</blockquote>"; 

    //Multiplicação
     $num = 10.17;
     $num2 = 10;
     $res = $num * $num2 ;

     echo "<br> O resultado da multiplicação é $res"

?>