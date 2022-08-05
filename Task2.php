<?php
function invertirCadena(string $sTexto){
    $sTextoRturn = "";
    
    for ($i=strlen($sTexto)-1; $i >= 0; $i--) {
         $sTextoRturn .= $sTexto[$i];
    }
    
    return $sTextoRturn;
}

    echo (invertirCadena("Prueba de RedCapital"));

?>
