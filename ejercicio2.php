<?php
function Primo($numero) {
    // verificamos si el número es menor o igual a 1 tiene que ser numero entero natural
    if ($numero <= 1) {
        return false; 
    // los números menores a 1 no pueden ser primos
    }
    
    // verifico si el número se puede dividir entre algo y entre si mismo
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i === 0) {
            return false; 
    // si es divisible entre algun numero que no sea el mismo o uno no será primo
        }
    }
    
    return true;
    // si no, si será primo
}

$numero = 12421;
$Primo = Primo($numero);

if ($Primo) {
    echo "$numero es un número primo.";
} else {
    echo "$numero no es un número primo.";
}

?>
