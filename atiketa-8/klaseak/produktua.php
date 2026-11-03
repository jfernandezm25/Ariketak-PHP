<?php
class Produktua {
private string $izenburua; 
private float $prezioa; 


public function __construct($izenburua, $prezioa){
    $this->izenburua = $izenburua; 
    $this->prezioa = $prezioa; 
}

public function aukeratu($kopurua) {
   $prezioFinala = $this-> prezioa * $kopurua;
   $this->pantailaratu($kopurua, $prezioFinala); 
}

 public function pantailaratu($kopurua, $prezioFinala) {
    echo "Izenburua: " . $this->izenburua . "<br>";
    echo "Unitateko prezioa: " . $this->prezioa . " €<br>";
    echo "Kopurua: " . $kopurua . "<br>";
    echo "Prezio finala: " . $prezioFinala . " €<br>";
    }
}
?>
