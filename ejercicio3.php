<?php
function palindromo($stringcito) {
    // eliminamos los espacios, por si utilizamos oraciones y no solo palabras
    $stringcito = strtolower(preg_replace('/\s+/', '', $stringcito));
    
    $longitud = strlen($stringcito);
    $stringcitoInvertido = '';
    
    // invertir las cadenas de texto (reordenarlas de atras hacia adelante)
    for ($i = $longitud - 1; $i >= 0; $i--) {
        $stringcitoInvertido .= $stringcito[$i];
    }
    
    // verificamos si es exactamente igual a la cadena de texto inicial
    return $stringcito === $stringcitoInvertido;
}

// cadena de texto que queremos verificar si es un palíndromo
$stringcito = "bob ama anona ama bob";
$palindromo = palindromo($stringcito);

// el resultado
if ($palindromo) {
    echo "el texto '$stringcito' es un palíndromo.";
} else {
    echo "el texto '$stringcito' no es un palíndromo.";
}

?>
