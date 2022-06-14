<?php
    //Array numerico e associativo
     $exemplo_01 = array();
     $exemplo_01[0] = "Isac";

     $exemplo_02 = array("Isac","Luiza","erick","Jessica");

    //Ver a estrutuira do array
     var_dump($exemplo_02);
     echo "<br>";

     echo $exemplo_02[3] . "<br>";

     $exemplo_02[4] = 560;
     echo $exemplo_02[4] . "<br>";

    /*
        saber dinammicamente a quantidade de elemento no array
        usandoa função count();
    */
    echo '$exemplo_02 tem um total de eolementos ' . count($exemplo_02) . "<br>";

    //array associativo

    $meses = array(
        "A" => "Janeiro",
        "B" => "Fevereiro",
        "C" => "março",
        "D" => "Abril",
        "E" => "Maio",
        "F" => "Junho",
        "G" => "Julho",
        "H" => "Agosto",
        "I" => "Setembro",
        "J" => "Outubro",
        "K" => "Novembro",
        "L" => "Dezembro",
    );
    print_r($meses);
    
?>