<?php
function hasSecuritylong($pass) {
    return strlen($pass) >=8;
}


function hasUpperLetter($pass){
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter){
        if ($letter == strtoupper ($letter)){
            return true;
        }
    }
    return false;
}

function hasNumber($pass){
    $arrayPass = str_split($pass);
    foreach ($arrayPass as $letter){
        if (is_numeric($letter)){
            return true;
        }
    }
    return false;
}

//DECLARACION DE VARIABLES 
$password="";

//PROCESO
echo "Ingrese la clave a registrar: \n"; 
fscanf (STDIN, "%s", $password);

if (hasSecurityLong($password)){
    if (hasUpperLetter($password)) {
        if(hasNumber($password)){
            echo "Felicidades! tu contraseña es segura y ha quedado registrada! ";
        } else {
            echo "Cuidado, tu contraseña no es segura! tu contraseña debe tener almenos un numero";
        }
        }else {
        echo "Cuidado, tu contraseña no es segura! tu contraseña debe tener almenos una letra mayuscula";
        }
 
        }else{
    echo "Cuidado, tu contraseña no es segura! tu contraseña debe tener almenos 8 caracteres";
}
?>