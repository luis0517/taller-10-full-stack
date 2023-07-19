<?php
//Declaracion de variables de entrada
const TICKET_PRICE = 25000;
$membershipType="";
$personNumber=0;

//Proceso

echo "Ingrese su tipo de afiliacion: ";
fscanf(STDIN, "%s", $membershipType);
echo "Ingrese el numero de personas: ";
fscanf(STDIN, "%d", $personNumber);

$totalPay = $personNumber * TICKET_PRICE;

if($membershipType == "A" || $membershipType == "B") {
    $totalPay =$totalPay - ($totalPay * 0.3);
}else {
    echo "usted no cuenta con membresia valida para obtener un descuento \n";
}

echo "El total a pagar es: " .$totalPay;
?>