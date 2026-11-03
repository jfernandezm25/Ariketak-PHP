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
$idazleak = [
    ["izena" => "Harry Potter", "autorea" => "J.K. Rowling"], 
    ["izena" => "Game of Thrones", "autorea" => "George R.R. Martin"],
    ["izena" => "The Hobbit", "autorea" => "J.R.R. Tolkien"] 
]; 
?>
 <table border="1">
            <tr>
                <th>Izena</th>
                <th>Autorea</th>
            </tr>
            <tr>
                <?php
                foreach ($idazleak as $idazle) {
                    echo "<tr>"; 
                    echo "<td>" . $idazle["izena"] . "</td>";
                    echo "<td>" . $idazle["autorea"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>


 <h3>Ariketa5.2 </h3>

 <?php
$ikasleak = [
    ["ikaslea" => "Jon", "nota" => 8],
    ["ikaslea" => "Ane", "nota" => 9],
    ["ikaslea" => "Markel", "nota" => 7]
];

$batzura = 0;
$kopurua = count($ikasleak);

for ($i = 0; $i < $kopurua; $i++) {
    $batzura += $ikasleak[$i]["nota"];
}

$batazbestekoa = $batzura / $kopurua;
?>

<table border="1">
    <tr>
        <th>Ikaslea</th>
        <th>Nota</th>
    </tr>
    <?php
    for ($i = 0; $i < $kopurua; $i++) {
        echo "<tr>";
        echo "<td>" . $ikasleak[$i]["ikaslea"] . "</td>";
        echo "<td>" . $ikasleak[$i]["nota"] . "</td>";
        echo "</tr>";
    }
    ?>
    <tr>
 <td colspan="5">Batazbestekoa: <?php echo $batazbestekoa; ?> </td>
</tr>
</table>

 <h4>   Ariketa 5.3  </h4>
 <?php 
$ikaslea = [
    ["ikaslea" => "Jon", "nota" => 8],
    ["ikaslea" => "Ane", "nota" => 9],
    ["ikaslea" => "Markel", "nota" => 7]
];

$textoNota = ""; 
?>

<table border="1">
    <tr>
        <th>Ikaslea</th>
        <th>Nota</th>
    </tr>
    <?php
    foreach ($ikaslea as $ikasle) {

    if ($ikasle["nota"] < 5) {
     "Txarra"; 
    }
    elseif ($ikasle["nota"] > 7 ){ 
         $textoNota="ona";
    }
    else {
         $textoNota="oso ona";
    }
        echo "<tr>";
        echo "<td>" . $ikasle["ikaslea"] . "</td>";
        echo "<td>" . $textoNota . "</td>";
        echo "</tr>";
    }

?>

 <h5>Ariketa 5.24234 </h5>

 <?php
$irakasleak = array(
            array("izena" => "Ane", "abizenak" => "Ruiz", "telefonoa" => "1111111", "adina" => 30),
            array("izena" => "Jon", "abizenak" => "Ibarra", "telefonoa" => "2222222", "adina" => 35),
            array("izena" => "Markel", "abizenak" => "Irazabal", "telefonoa" => "333333333", "adina" => 40)
        );   
?>
    <table border="1">
    <tr>
        <th>Izena</th>
        <th>Abizena</th>
        <th>Telefonoa</th>
        <th>Adina</th>
    </tr>
    <?php
    foreach ($irakasleak as $irakasle) {
        echo "<tr>";
        echo "<td>" . $irakasle["izena"] . "</td>";
        echo "<td>" . $irakasle["abizenak"] . "</td>";
        echo "<td>" . $irakasle["telefonoa"] . "</td>";
        echo "<td>" . $irakasle["adina"] . "</td>";
        echo "</tr>";
    }
  
        ?>

</table>

 <h6>Ariketa 5.5 </h6>
 <?php

 $irakasleak = array(
            array("izena" => "Ane", "abizenak" => [ "Ruiz", "Atutxa"], "telefonoa" => "1111111", "telefonoa2" => "1212121212", "adina" => 30, "moduluak" => 
            ["PROG" => 5, "BBDD" => 7, "FOL" => 8]),
            array("izena" => "Jon", "abizenak" => [ "Ruiz", "Atutxa"], "telefonoa" => "2222222", "telefonoa2" => "1212121212", "adina" => 35,"moduluak" => 
            ["PROG" => 5, "BBDD" => 7, "FOL" => 8]),
            array("izena" => "Markel", "abizenak" => [ "Ruiz", "Atutxa"], "telefonoa" => "333333333", "telefonoa2" => "1212121212", "adina" => 40,"moduluak" => 
            ["PROG" => 5, "BBDD" => 7, "FOL" => 8])
        );        
 ?>

  <table border="1">
            <tr>
                <th>Izena</th>
                <th>Abizena 1</th>
                <th>Telefonoa 1</th>
                <th>Telefonoa 2</th>
                <th>Adina</th>
                <th>Notak</th>
            </tr>
            <?php
        foreach ($irakasleak as $irakaslea) {
                echo "<tr>";
                    echo "<td>".$irakaslea["izena"]."</td>";
                    echo "<td>";
            foreach($irakaslea["abizenak"] as $abizena) {
                        echo $abizena." ";
                    }
                    echo "</td>";
                    echo "<td>".$irakaslea["telefonoa"]."</td>";
                    echo "<td>".$irakaslea["telefonoa2"]."</td>";
                    echo "<td>".$irakaslea["adina"]."</td>";
                    echo "<td><ul>";
                    
            foreach($irakaslea['moduluak'] as $key => $value) {
                        echo "<li>".$key.": ".$value."</li>";
                    }
                    echo "</ul></td>";
                echo "</tr>";
            }
                  echo "</ul></td>";
                    ?>
                    </table>