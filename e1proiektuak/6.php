<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
</head>

<body>
    <h1>Ariketa6 </h1>


    <h2>Ariketa6.1 </h2>
    <?php
    $zenbakiak = [4, 8, 15, 16, 23, 42]; // declaramos el array
    
    function Batura($batura)
    {  //hacemos la funcion batura y creamos que batura sea la suma
        return array_sum($batura);  //devolvemos batura
    }

    echo Batura($zenbakiak);

    ?>

    <h2>Ariketa6.2 </h2>
    <?php

    function ArrayakKonbinatuak($array1, $array2)
    { //hacemos la funcion que une a los dos
        $emaitza = array_merge($array1, $array2); //declaramos la variable que hace el arraymerge de los dos
        ?>
        <table border="1"> <!-- Abrimos la table de html -->
            <tr>
                <th>Arrayak</th> <!-- columna -->
            </tr>
            <?php
            foreach ($emaitza as $arrayak) { //hacemos el forich para meterlo todo 
                echo "<tr>";
                echo "<td>" . $arrayak . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <?php
    }  //aqui acaba la funcion
    $array1 = ["Sagarra", "Uva"]; //declaramos lo que hay dentro de las variables
    $array2 = ["Pera", "Laranja"];

    ArrayakKonbinatuak($array1, $array2); //delcaramos la funcion que coje las dos
    ?>



    <h2>Ariketa6.3 </h2>

    <?php
    function ArrayAsko($ikasleZerrenda){
     //hacemos la funcion que une a los dos
        ?>
        <table border="1"> <!-- Abrimos la table de html -->
            <tr>
                <th>Ikasle </th> <!-- columna -->
                <th>Nota </th> <!-- columna -->
            </tr>
            <?php
            foreach ($ikasleZerrenda as $Info) { //hacemos el forich para meterlo todo 
                echo "<tr>";
                echo "<td>" . $Info["ikaslea"] . "</td>";
                echo "<td>" . $Info["nota"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>

        <?php
    }
    //aqui acaba la funcion
    $ikasleak = [
        array("ikaslea" => "Jon", "nota" => 8),
        array("ikaslea" => "Ane", "nota" => 9),
        array("ikaslea" => "Markel", "nota" => 7)
    ];
    
    ArrayAsko($ikasleak); //delcaramos la funcion que coje las dos
    ?>


    <h2>Ariketa6.4 </h2>
    <?php

    ?>