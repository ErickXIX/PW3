<?php
/*
    1 - Para que serve Função
    2 - Forma de declaarar função
    3 - Temos funções pré-definidas, funções de usuário
*/

// Exemplo 1º função nomeada sem argumento

 function mensagemUsuario (){
    echo "Será que estou entendendo?";

 }
 mensagemUsuario();
 echo "<br>";
// chamar uma função que se encontra na memoria
 mensagemUsuario();

echo "<hr>";

// Exemplo 2º função com argumento

 function Saudacao($arg){
    echo "Seja bem vindo, $arg";
 }

//
 $nome_x = "Emerson";
  Saudacao($nome_x);
  echo "<br>";

 $x = "Paulo";
  Saudacao($x);
  echo "<br>";

 $v = "Erick";
  Saudacao($v);
  echo "<br>";

 Saudacao("sorocaba");

echo "<hr>";

function Adicao($arg1 , $arg2){
     $n1 = $arg1;
     $n2 = $arg2;
     $resultado = $n1 + $n2;
    echo "valor: " .$resultado;
}

// Passar os valores atraves de variavel
$numero1 = 10;
$numero2 = 11;

Adicao($numero1 , $numero2);

echo "<hr>";

$numeros = [10, 4, 50, 10, 5];

function CalArray($array){
    $soma = 0;
    foreach($array as $values ){
        $soma += $values;
    }
    echo $soma;
}
echo "<br>";
CalArray($numeros);

echo "<hr>";

function Soma($arg, $arg2){
    $resultado = $arg + $arg2;
    //echo resultado; // 300
    return $resultado ; // saida de um valor(variavel/array)
}

$valor = Soma(100, 200);

echo $valor;
echo "<br>";
echo Soma (20, 100);
echo "<br>";
echo $valor;
echo "<br>";

/*Quero pegar o valor ? e contunuar no
 script geral
*/

// usar a função só para somar e valor
//retornado usando script global para fazer
//o calculo e o numero par/ impar

echo "<hr>";

function MsgNumero($arG){
    if($arG !=0){
        echo "impar";
    }else{
        echo "par";
    }
}

$valores = Soma(300, 45); // retorno 345

$V = $valores % 2;
MsgNumero($V);

echo "<hr>";

?>