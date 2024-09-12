<?php
 ini_set('declare(strict_types', '1');
 function fraseMayus($frase, $conversion = true)
 {
    $frase = strtolower($frase);
    if ($conversion === true) {
        $resultado = ucwords($frase);
    }
    else {
        $resultado = strtoupper($frase);    
    }
    return $resultado;
 }
echo (fraseMayus("esto es una prueba"));
 
