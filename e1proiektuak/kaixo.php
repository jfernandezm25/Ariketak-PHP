<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ariketa 1</title>
    </head>
    
    <body>
        <h1>Ariketa1</h1>
    
        <?php

        $zenbakia = 12;
        echo ("Zure zenbakia da : $zenbakia");

        echo "<br>";
      
        ?>

        <h1> Ariketa 2 </h1>

             <?php

        if ($zenbakia < 10) {

            echo ("Zenbakia txikia da");
        }
        else {
            echo  ("Zenbakia handia da");
        }
        ?>

        <h1> Ariketa 3 </h1>
        <?php
    

        $erosketa = 12;

        if ($erosketa > 10) {
            echo "10 erosketa baino gehiao egin dituzu"; 
        } 
        ?>
        <h1> Ariketa 4 </h1>
            
        <?php

        $pin = 1234; 
        $pinBenetakoa = 1234; 

        if ($pin == $pinBenetakoa ) {
            echo "Pina ona da"; 
        } else {
            echo "Pina charto dago"; 
        }
        ?>

        <h1> Ariketa 5 </h1>
            <?php
        $baimendutako_mezua = "Gure lokalera sartu zaitezke"; 
        $ezezko_mezua = "Ezin zara sartu"; 
        $adina = "19"; 

        if ($adina < 18 ) {
            echo $ezezko_mezua; 
        } else {
           echo $baimendutako_mezua; 
        }
            ?>
        

    </body>
</html>




