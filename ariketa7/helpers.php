<?php
function lortuLetra($zenbakia) {
    $letrak = "TRWAGMYFPDXBNJZSQVHLCKE";
    return $letrak[$zenbakia % 23];     
}

?>