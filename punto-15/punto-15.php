<?php
function suma($num1, $num2) {
    return $num1 + $num2;
}

function resta($num1, $num2) {
    return $num1 - $num2;
}

function multiplicacion($num1, $num2) {
    return $num1 * $num2;
}

function division($num1, $num2) {
    if ($num2 != 0) {
        return $num1 / $num2;
    } else {
        return "No se puede dividir por cero";
    }
}
// Obtener los números ingresados por el usuario
$num1 = readline("Ingresa el primer número: ");
$num2 = readline("Ingresa el segundo número: ");
// PROCESO
$resultado_suma = suma($num1, $num2);
$resultado_resta = resta($num1, $num2);
$resultado_multiplicacion = multiplicacion($num1, $num2);
$resultado_division = division($num1, $num2);

// RESULTADOS
echo "Suma: " . $resultado_suma . "\n";
echo "Resta: " . $resultado_resta . "\n";
echo "Multiplicación: " . $resultado_multiplicacion . "\n";
echo "División: " . $resultado_division;
?>