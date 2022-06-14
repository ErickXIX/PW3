<?php
// questão 1
echo "<br> Questão 1</br>";
 $a = 10;
 $b = 20;

 $c = $a; //10

 $a = $b;
 $b = $c;

 //troca de valores e exibição  
 // $a = 20; $b = 10;
 
 echo "<br> a= " . $a . " , b= " . $b; // a=20, b=10
 echo "<br> _________________________________</br>";
 
 //Quetão 2
 echo "<br> Quetão 2</br>";
 echo "<p style=\"color:blue; font-size:20px\">A)</p>";
 $a=10;
 $b= 20;
 echo "<br> B= $b";
 $b=5;
 echo "<br> A= " . $a . " , B= " . $b . "</br>";

 echo "<p style=\"color:blue; font-size:20px\">B)</p>";
 $a=30;
 $b=20;
 $c=$a+$b;
 echo "<br> C=$c";
 $b=10;
 echo "<br> B= " . $b . " , C= " . $c;
 $c=$a+$b;
 echo "<br> A= " . $a . " , B= " . $b . " , c= " . $c;

 echo "<p style=\"color:blue; font-size:20px\">C)</p>";
 $a = 10;
 $b = 20;
 $c = $a;
 $b = $c;
 $a = $b;
 echo "A = " . $a . ", B = " . $b . " e C = " . $c; 

 echo "<p style=\"color:blue; font-size:20px\">D)</p>";
 $a=10;
 $b=$a+1;
 $a=$b+1;
 $b=$a+1;
 echo "<br>A= " . $a;
 $a=$b+1;
 echo "<br> A= " . $a . " , B= " . $b;

 echo "<p style=\"color:blue; font-size:20px\">E)</p>";
 $a=10;
 $b=5;
 $c=$a+$b;
 $b=20;
 $a=10;
 echo "<br> A= " . $a . " , B= " . $b . " , C= " . $c;

 echo "<p style=\"color:blue; font-size:20px\">F)</p>";
 $x=1;
 $y=2;
 $z=$y+$x;
 echo "<br> Z= " . $z;
 $x=5;
 $y=$x+$z;
 echo "<br> X= " . $x . " , Y= " . $y . " , Z= " . $z;

 ?>