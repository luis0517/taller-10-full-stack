<?php
//Declaracion de variables de entrada 
  $Numerouno = 0;
  $Numerodos = 0;
  
  //Proceso
  echo "ingresa el primer numero a sumar: ";
  fscanf(STDIN, "%d", $Numerouno);
  echo "ingresa el Segundo numero a sumar: ";
  fscanf(STDIN, "%d", $Numerodos);
  
  $add = $Numerouno + $Numerodos;
  
  echo "La suma es: " . $add;
?>