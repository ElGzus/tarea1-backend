<?php
function generarFibonacci($n) {
    $fibonacci = array();
    
// estos son los dos primeros terminos 0 y 1
    $fibonacci[] = 0;
    $fibonacci[] = 1;
    
// aqui se uso un bucle para generar los siguientes terminos
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}

// la cantidad de terminos que se pide
$n = 10;

// llamamos a la funcion
$numerosFibonacci = generarFibonacci($n);

// mostramos el resultado
echo "los $n valores de la funcion son: ";
foreach ($numerosFibonacci as $valores) {
    echo $valores . " ";
}

?>
