<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ariketa 1</title>
    </head>
    
    <body>
        <h1>Ariketa5 </h1>

        
 <h2>Ariketa5.1 </h2>
<?php
$liburuak = [ //array principal
    ["izena" => "Harry Potter", "autorea" => "J.K. Rowling"], //array txikia que va dentro
    ["izena" => "Game of Thrones", "autorea" => "George R.R. Martin"],
    ["izena" => "The Hobbit", "autorea" => "J.R.R. Tolkien"]
];
?>

<table border="1">
    <tr>
        <th>Izena</th> <!-- columna -->
        <th>Autorea</th> <!-- columna -->
    </tr>
    <?php
    foreach ($liburuak as $liburu) { //meter array en otro x el foreach
        echo "<tr>"; 
        echo "<td>" . $liburu["izena"] . "</td>"; //// 1. zelda: liburuaren izena
        echo "<td>" . $liburu["autorea"] . "</td>"; // 2. goiburuko zelda (lodiz)
        echo "</tr>";
    }
    ?>
</table>


 <h3>Ariketa5.2 </h3>

 <?php
 
$ikasleak = [ //array principal
    ["ikaslea" => "Jon", "nota" => 8], 
    ["ikaslea" => "Ane", "nota" => 9],
    ["ikaslea" => "Markel", "nota" => 7]
];
?>

<table border="1">
    <tr>
        <th>Ikaslea</th> <!-- columna -->
        <th>Nota</th> <!-- columna -->
    </tr>
    <?php
    foreach ($ikasleak as $ikasle) { //meter array en otro x el foreach
        echo "<tr>"; 
        echo "<td>" . $ikasle["ikaslea"] . "</td>"; //// 1. zelda: liburuaren izena
        echo "<td>" . $ikasle["nota"] . "</td>"; // 2. goiburuko zelda (lodiz)
        echo "</tr>";
    }
    ?>
</table>


 <h4>Ariketa 5.3  </h4>
 <?php
$ikasleak = [ //array principal
    ["ikaslea" => "Jon", "nota" => 8], 
    ["ikaslea" => "Ane", "nota" => 7],
    ["ikaslea" => "Markel", "nota" => 7]
];
?>

<table border="1">
    <tr>
        <th>Ikaslea</th> <!-- columna -->
        <th>Nota</th> <!-- columna -->
    </tr>
    <?php
   foreach ($ikasleak as $ikasle) {
        // 1. Decidir el texto según la nota

        if ($ikasle["nota"] >= 5) {
                
            $textoNota = "ona";
        } else {
            $textoNota = "txarra";
        }

        // 2. Mostrar la fila
        echo "<tr>";
        echo "<td>" . $ikasle["ikaslea"] . "</td>";
        echo "<td>" . $textoNota . "</td>";
        echo "</tr>";
    }
    ?>
</table>

 <h5>Ariketa 5.4 </h5>
 <?php

 ?>

 <h6>Ariketa 5.5 </h6>
 <?php

 ?>