<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
     <?php
      echo "3IPIEM"; ?>

    </title>
</head>
<body>

    <?php 
        //estarei colocando uma tag html entro do comando php
        echo"<h1> Introdução ao linguagem php </h1>";
        
        /*
        estarei colocando variavel para ser interpolado com texto
       */

       $nome = "thiago";

       print("<p style=\"color:violet; fint-size:20px\"> olá $nome, seja bem vindo!!!</p>");


        ?>
        <p style="color:purple; fint-size:4 0px"> <?php echo (" Sou um php sendo colocado dentro de uma tag html ") ; ?> </p>

        <?php 

        $nome01 = "Emerson";
        $nome02 = "Robson";
        $nome03 = "João";
        $nome04 = "Maria d'água";

        echo "<ul>";
            echo "<li>".$nome01."</li>";
            echo "<li>".$nome02."</li>";
            echo "<li>".$nome03."</li>";
            echo "<li>".$nome04."</li>";
        echo "</ul>"

        echo '<p> esta pegando fogo na caixa de agua!!!!, chama o
        '. $nome01 .'</p>';

        ?>

</body>
</html>