<?php
//Declaracion de variables de entrada
$firstNumber=0;
$secondNumber=0;
$operationType="";
$result = 0;

//Proceso 
echo "Ingrese el primer numero a operar: ";
fscanf(STDIN, "%d", $firstNumber);
echo "Ingrese el primer numero a operar: ";
fscanf(STDIN, "%d", $secondNumber);

echo "Elije el tipo de operacion: \n";
echo "1 - Sumar \n";
echo "2 - Reatar \n";
echo "3 - Multiplicar \n";
echo "4 - dividir \n";
fscanf(STDIN, "%d", $operationType);

switch($operationType){
    case 1:
        $result=$firstNumber + $secondNumber;
        break;
        
        case 2:
        $result=$firstNumber - $secondNumber;
        break;
        
        case 3:
        $result=$firstNumber * $secondNumber;
        break;
        
        case 4:
        $result=$firstNumber / $secondNumber;
        break;
        default:
            echo "no eligio una opcion correcta";
        
}

echo "El resultado es: " .$result;

?>