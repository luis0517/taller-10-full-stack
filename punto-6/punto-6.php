<?php
//pedimos al usuario que ingrese su numero 
echo "Ingrese su nombre por favor: ";
$nombre=readline();

//Pedir al usuario que ingrese su edad 
echo " Ingrese su edad por favor: ";
$edad=readline();

echo "----------". "\n";

//verificamos

if($edad >=18){
    echo " Buen dia " ."$nombre"." eres mayor de edad :)";
}else{
    echo "Buen dia " ."$nombre"." eres menor de edad :(";
}
?>