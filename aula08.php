<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AULA 08 LOOP</title>
    </head>
    <body>
        <?php
            //para, repita, enquanto
            
            //para (for)
            //variável; condição; contador
            for($i = 0; $i < 10; $i++){
                echo "<p style=\"background-color:#FF1493; margin:10; text-align:center\"> $i </p> ";
            }
            
        
            echo"<hr>";
            //fazer um loop de 1 a 1000 e mostrar somente os valores pares
            for($i = 0; $i <= 10; $i+= 2){
                echo "<p style=\"background-color:#FFD700; margin:10; text-align:center\"> $i </p> ";    
            }
            
            //correção
            /* for($i = 1; $i <= 1000; $i++){
                if ( $i % 2 == 0){
                    echo "<p style=\"background-color:#FFD700; margin:10; text-align:center\"> $i </p> ";    
                    echo "$i é par";
                }    
            }
            */

            //enquanto
            
            $count = 1;
            while ($count <=10){
                echo "<p>$count</p>";
                //contador
                $count++;
                //$count = $count + 1;
            }
            echo"<hr>";
            
            $nome = "Caudio";
            while( $nome != "fim"){
                echo "<p> $nome</p>";
                //contador
                $nome = "fim";
                echo"<hr>";
            }

            //repita
            $i = 0;
            do{
                echo"<p>$i</p>";
                $i++;
                }while($i <= 5);
                echo"<hr>";


            //decrescente
            for($i=10; $i>=1; $i--){
                echo "<p>$i</p>";
            }
            while ($i>=1){
                echo"<p>$i</p>";
                $i--;
            }
            //tabuada do 8
            //for:
                for($i = 0; $i <= 80; $i+=8){
                    echo "<p style=\"background-color:#FF6781; margin:10; text-align:center\"> $i </p> ";
                }
            //while
            /* while ($i>=8){
                    echo"<p>$i</p>";
                    $i+=8;
                    $i = ""
                }*/ 


                

        ?>
    </body>
</html>