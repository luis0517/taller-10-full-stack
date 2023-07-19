<?php

// Pedir al usuario que ingrese el tipo de afiliación
echo "Por favor ingresa el tipo de afiliación (A, B, C o D): ";
$tipoAfiliacion = readline();

// Pedir al usuario que ingrese el número de personas
echo "Por favor ingresa el número de personas: ";
$numPersonas = readline();

// Calcular el valor total de las entradas sin descuento
$valorTotal = $numPersonas * 25000;

// Calcular el descuento según el tipo de afiliación
switch ($tipoAfiliacion) {
    case 'A':
        $descuento = $valorTotal * 0.3;
        break;
    case 'B':
        $descuento = $valorTotal * 0.25;
        break;
    case 'C':
        $descuento = $valorTotal * 0.1;
        break;
    case 'D':
        $descuento = $valorTotal * 0.05;
        break;
    default:
        $descuento = 0;
        break;
}

// Calcular el valor total de las entradas con descuento
$valorTotalConDescuento = $valorTotal - $descuento;

// Mostrar el valor total de las entradas con descuento
echo "El valor total de sus entradas con descuento es: $" . $valorTotalConDescuento;

?>