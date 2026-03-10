<?php

$numero1 = 2;
$numero2 = 0;

try {
    $resultado = $numero1 / $numero2;
    echo "El resultado es: " . $resultado;
} 
catch (Throwable $e) {
    echo "Error: " . $e->getMessage;

}

?>