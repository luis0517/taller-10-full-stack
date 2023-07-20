<?php
//Defino el arreglo
$Numeros=array(10,10,40,50);

//Inicializo la variable para poder almacenar la suma
$Suma=0;

//Proceso
for ($i=0; $i<count($Numeros); $i++){
    $Suma+=$Numeros[$i];
}
echo "La suma de los numeros es: " .$Suma;
?>