<?php
function Adicao($arg,$arg2){
    $resultado = $arg + $arg2;
    return $resultado;
}
function Div($arg,$arg2){
    $resultado = $arg / $arg2;
    return $resultado;
}
function subt($arg,$arg2){
    $resultado = $arg - $arg2;
    return $resultado;
}
function multi($arg,$arg2){
    $resultado = $arg * $arg2;
    return $resultado;
}

//
$numero_1 = 30;
$numero_2 = 100;
$op = "-";

    switch ($op) {
        case '+':
           $soma = Adicao($numero_1, $numero_2);
           echo "O resultado de $numero_1 + $numero_2 : " . $soma;
             break;
  
        case '-':
            $soma = subt($numero_1, $numero_2);
            echo "O resultado de $numero_1 - $numero_2 : " . $soma;
             break;

        case 'x':
            $soma = multi($numero_1, $numero_2);
            echo "O resultado de $numero_1 x $numero_2 : " . $soma;
             break;

        case '/':
            $soma = Div($numero_1, $numero_2);
            echo "O resultado de $numero_1 / $numero_2 : " . $soma;
             break;        
        
    }

echo "<hr>";

        if ($op == "+") {
           $soma = Adicao($numero_1, $numero_2);
           echo "O resultado de $numero_1 + $numero_2 : " . $soma;
        }

        if ($op == "-") {
            $soma = subt($numero_1, $numero_2);
            echo "O resultado de $numero_1 - $numero_2 : " . $soma;
        }
        if ($op == "x") {
            $soma = multi($numero_1, $numero_2);
            echo "O resultado de $numero_1 x $numero_2 : " . $soma;
        }

        if ($op == "/") {
            $soma = Div($numero_1, $numero_2);
            echo "O resultado de $numero_1 / $numero_2 : " . $soma;     
        }

?>