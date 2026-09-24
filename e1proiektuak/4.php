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

// $zenbakiak = [4, 2, 8, 1, 3]; //estatiko 
$zenbakiak = []; // abres el array y con un for luego declaras random

for ($i= 0 ; $i < 5; $i++) { // para que imprima solo 5 numeros
  $zenbakiak[] = rand(1, 100); // los numeros entre 1 y 20
}
   $batura = array_sum($zenbakiak); 

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
        <td colspan="5">Batura: <?php echo $batura; ?> </td>
    </tr>
</table>


 <h2>Ariketa4.2 </h2>
 <?php

$herrialdeak = [ "EH", "Frantzia", "Alemania", "Italia"];  // array jartzen dugu

sort($herrialdeak); //sort() ordenatzeko matrizeak goranzko ordenan.

echo "<table border='1'>";

 for ($i = 0; $i < count($herrialdeak); $i++) { 
    echo "<tr><td>" . ($i + 1) . "herrialdea : " . $herrialdeak[$i] . "</td></tr>" ; // para que ponga en orden los numeros 1. zenbakia , 2 zbk.... 
    

}

echo "</table>";

?>

 <h2>Ariketa4.3 </h2>


 <?php
$zenbakiak = []; 


for ($i= 0 ; $i < 6; $i++) { // para que imprima solo 5 numeros
  $zenbakiak[$i] = rand(1, 100); // los numeros entre 1 y 20
}
?>
<table border="1"> 
    <tr> 
        <th> Zenbakiak </th> 
        <th> Bikoitia </th> 
        
    </tr>
        <?php
        foreach ($zenbakiak as $zenbaki){
            echo "<tr>"; 
            echo "<td>$zenbaki </td>"; 

    if ($zenbaki %2 == 0) { // si entre 2 da 0 = bikoiti
hola hola
   echo "<td> BAI </td>" ; 
    }
else { 
    echo "<td> EZ </td>" ;
}
echo "</tr>"; 
    }
?>
       
</table>
