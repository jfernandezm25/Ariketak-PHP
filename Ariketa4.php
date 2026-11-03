<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ariketa 1</title>
    </head>
    
    <body>
        <h1>Ariketa4 </h1>

        
 <h2>Ariketa4.1 </h2>
<?php
$zenbakiak= []; 

for ($i=0; i<5 ; $i++){
    $zenbakiak = rand(1,100); 
}
$batura= array_sum($zenbakiak); 

?>
<table border="1">
    <tr>
        <th> 1. Zenbakia <th> 
        <th> 2. Zenbakia <th> 
        <th> 3. Zenbakia <th> 
        <th> 4. Zenbakia <th> 
        <th> 5. Zenbakia <th> 
    </tr>   
    

