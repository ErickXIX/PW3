<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#4d4d4d;">

    <?php
    //array, vetor, matriz, lista

    /*
    */
    
    //1º forma
    $nome =  array();
    $nome[0] = "Guilherme";
    $nome[1] = "Gustavo";
    $nome[2] = "Taynara";
    $nome[3] = "Isabela";
    $nome[10] = "Jessica";

    //echo $nome[2]. "<br>";

    print_r ($nome);
    echo "<br>";

    echo $nome[10]. "<br>";

    var_dump($nome);
    echo "<br>";

    echo $nome . "<br>";

    echo "<hr>";

    for($i=0 ; $i <= 10 ; $i++){
        if(isset($nome[$i]))
        echo "<p> $nome[$i] </p>";
    }
    
    //while
    //do {} while
    echo "<hr>";
    
    foreach ($nome as $value) {
        echo "<p>$value</p>";
    }
    echo "<hr>";
    
    //Tabuada do 8 
    for($i=1 ; $i <= 10 ; $i++ ){
        echo "<p> $i x 8 =" . ($i * 8) .  "</p>";
    }
    echo "<hr>";

    //Tabuada 1 a 10

    for($i =1 ; $i <= 10 ; $i++){
        for($y=1 ; $y <=10 ; $y++){
            while ($i == $y) {
                echo "<br>\n\Tabuada do $y\n";
                break;
            }
        }
        for ($num = 0; $num <= 10; $num ++){ 
            $calc = $i * $num;
            echo "<br>$i X $num = $calc";
            }
    }

    ?>
</body>
</html>