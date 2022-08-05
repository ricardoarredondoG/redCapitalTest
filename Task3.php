<?php
function multiplicarNumero(int $iNumero1, int $iNumero2){

    $iResultado = 0;
    
    for ($i = 1; $i <= $iNumero2; $i++) {
         $iResultado +=  $iNumero1;
    }
    
    return $iResultado;
}

    echo (multiplicarNumero(6,9));

?>
