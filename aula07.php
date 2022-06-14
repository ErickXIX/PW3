<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //trabalha com condicional 1º simples
        //2º composto, 3º complexo

        //1º simples
         // fin ( booleano )
         $anonasc = 2020;
         $anoatual = 2022;
         //formula
         $idade= $anoatual - $anonasc;

         if( $idade >= 16 || $idade<=60){
             echo "<p> Permitido votar!! </p>";
         }

         if($idade < 16 || $idade > 60){
             echo "<p> Não é permitido votar </p>";
         }
         echo "<hr>";

        echo "<h1>Nota de um aluno!!!</h1>";
        $nota1 = 1;
        $nota2 = 5.9;
        $nota3 = 6.89;
        //calcula a media do aluno
        echo $media = ( $nota1 + $nota2 + $nota3 ) / 3;
         
        if($media < 3 ){
            echo "<p> Nota insuficiente </p>";
            echo "estude mais rapaz!!!!";
        }
        if ($media >= 3 && $media < 6){
            echo "<p> nota regular </p>";
        }
        if($media >= 6 && $media < 8){
            echo "<p>Nota bom</p>";
        }
        if($media >= 8 && $media <= 10){
            echo "<p> Nota muito bom!!! </p>";
        }


        //2º composto
        echo "<h1> composto </h1>";
        $anonasc = 1983;
        $anoatual = 2022;
        $idade= $anoatual - $anonasc;
        if($idade >= 16 && $idade <= 60){
            echo "<p>Permitido votar </p>";
        }else{
            echo "<p>Não é permitido votar </p>";    //false
        }


        //complexo
    echo "<hr>";
        $anonasc = 2015;
        $anoatual = 2022;
        $idade= $anoatual - $anonasc;
        if($idade >= 16 && $idade <= 60){
            echo "<p>Permitido votar </p>";
        }else if($idade < 16){
            echo "<p>Não é permitido votar,
            devido ser menor de 16 </p>";    //true
        }else {
            echo "<p> Não e permitido vota,
            devido ser maior de 60 </p>";
        }
    ?>
</body>
</html>