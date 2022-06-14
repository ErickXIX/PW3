<?php
    function Conta($nu, $sin, $nu2){
        if ($sin="+"){
        $resul = $nu + $nu2;

         echo "$nu + $nu2 = $resul";
         echo "<br>";
        }
        if ($sin="-"){
            $resul = $nu - $nu2;
   
            echo "$nu - $nu2 = $resul";
            echo "<br>";
        } 
        if ($sin="*"){
            $resul = $nu * $nu2;
   
            echo "$nu x $nu2 = $resul";
            echo "<br>";
        }
        if ($sin="/"){
            $resul = $nu / $nu2;
   
            echo "$nu / $nu2 = $resul";
            echo "<br>";
        }
    }
    $valor = Conta(2,"*",2);
    echo $valor;

?>