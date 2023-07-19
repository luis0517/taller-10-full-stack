<?php
  // Definimos una constante con el valor de 2
  define("Numero_constante",2). "\n";
  echo "Definimos una constante con el valor de ". Numero_constante . "\n";

  // Definimos una variable con el valor de 7
  $Numerouno=7;
  echo "Definimos una variable con el valor de". $Numerouno . "\n";
  
  echo "----------". "\n";
  

  //Realizamos la primer suma utilizando la constante y la variable
  echo "Realizamos la primer suma utilizando la constante y la variable". "\n";
  $Suma=Numero_constante + $Numerouno . "\n";
  echo "El resultado de la suma de la constante y la variable es:" .$Suma;
   echo "----------". "\n";
  //Cambiamos el valor de la variable a 5
  $Numerouno=5 . "\n";
  echo "Cambiamos el valor de la variable a ". $Numerouno . "\n";
  
  
  //Sumamos de nuevo la constante y la variable con su nuevo valor";
  $Sumafinal=Numero_constante + $Numerouno. "\n";
  echo "Sumamos de nuevo la constante y la variable con su nuevo valor" . "\n" . "y es resultado es " .$Sumafinal;
  
?>