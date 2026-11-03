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

for ($i=0; $i<5 ; $i++){
 $zenbakiak[] = rand(1,100); 
}
   
    $batura= array_sum($zenbakiak); 

?>
<table border="1">
     <tr> 
        <th> 1.zenbakia </th>
        <th> 2. zenbakia</th>
        <th> 3. zenbakia</th>
        <th> 4. zenbakia</th>
        <th> 5. zenbakia</th>
    </tr>

    <tr> 
        <?php
        foreach ($zenbakiak as $zenbaki){
            echo "<td>$zenbaki </td>"; 
        }
         ?>
        </tr>
    <tr>
       
    </tr>
</table>


    <h2>Ariketa4.2 </h2>
<?php
$herrialdeak = [ "EH", "Frantzia", "Alemania", "Italia"]; 

sort ($herrialdeak); 

?>
<table border="1">
     <tr> 
        <th> 1. herrialdea </th>
        <th> 2. herrialdea</th>
        <th> 3. herrialdea</th>
        <th> 4. herrialdea</th>
    </tr>

    <tr> 
        <?php
        foreach ($herrialdeak as $herrialde){
            echo "<td>$herrialde </td>"; 
        }
         ?>
        </tr>
</table>


 <h2>Ariketa4.3 </h2>
 <?php

$zenbakiak = []; 

for ($i= 0; $i < 6; $i++){
    $zenbakiak [] = rand(1,100); 
}
?>

<table border="1">
     <tr> 
        <th> Zenbakia </th>
        <th> Bikoitia </th> 
    </tr>

    <tr> 
        <?php
        foreach ($zenbakiak as $zbk){
            echo "<tr>";
            echo "<td>$zbk </td>"; 

        if ($zbk %2 == 0) {
        echo "<td> BAI </td>" ; 
        }
        else {
        echo "<td> EZ </td>" ; 
        }
        echo "</tr>"; 
        }  
         ?>
        
</table>




