<?php
//DECLARACION DE VARIABLES DE ENTRADA
$numero=1;

//PROCESO
echo "Numero pares del 1 al 100: \n";

while ($numero <= 100){
    if ($numero % 2 == 0){
        echo $numero."\n";
    }
    $numero++;
}
?>