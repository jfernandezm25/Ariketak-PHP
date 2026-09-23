<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ariketa 1</title>
    </head>
    
    <body>
        <h1>Ariketa3 </h1>
        <h2>Ariketa3.1 </h2>

        

<?php
$batura = 0;
$zenbakia= 1;

while ($zenbakia <= 10) {
   $batura += rand(1, 10); 
   $zenbakia++; 
}

echo "10 zenbakien batura totala: " . $batura . "<br>";
?>

<h2> Ariketa2 </h2> 
    <?php

$biderkadura = 1; 

    for ($i=1; $i <=5 ; $i++){ 
    $biderkadura *= $i; 
}
    echo "Zure emaitza da : " . $biderkadura; 
    
    ?>
         </body>
</html>