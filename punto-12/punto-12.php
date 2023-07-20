<?php
// Obtenemos el número ingresado por el usuario
$numero = readline("Ingrese un número: "); 

//Proceso 
echo "Tabla de multiplicar del $numero: \n"; 

for($i = 0; $i <= 30; $i++) {
  $resultado = $numero * $i;
  echo "$numero x $i = $resultado \n"; 
}
?>