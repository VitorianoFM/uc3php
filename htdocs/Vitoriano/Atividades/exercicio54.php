<?php

// Verifica de Números Primos (For + If Else)

echo "Digite um número: ";
$numero = trim(fgets(STDIN));
$ehPrimo = true;

if ($numero < 2) {
    echo "Não é número primo";

} else {
    for ($i =2; $i < $numero; $i++){
        if ($numero % $i == 0) {
            $ehPrimo = false;
        }
    }
}

if ($ehPrimo == true) {
    echo "O numero ".$numero." é primo";

} else {
    echo "O número ".$numero." não é primo";
}