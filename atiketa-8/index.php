<?php
require_once 'klaseak/ikaslea.php';
require_once 'klaseak/produktua.php';
require_once 'klaseak/liburuKatalogoa.php'; 
?>

<h1>Ariketa8</h1>
<h2>Ariketa8.1</h2>

<?php
$ikaslea1 = new Ikaslea("Joseba");

$ikaslea1->gehituNota("WEC", 9);
$ikaslea1->gehituNota("WES", 8);
$ikaslea1->gehituNota("SIS", 5);
$ikaslea1->gehituNota("DAW", 2);
$ikaslea1->gehituNota("AAA", 10);
$ikaslea1->gehituNota("EIE", 6);

$ikaslea1->erakutsiNotak();
?>

<h2>Ariketa8.2</h2>

<?php
$produktua1 = new Produktua("Sagarra", 21); 

$produktua1->aukeratu(4); 

?>