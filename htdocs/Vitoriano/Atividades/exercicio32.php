<?php

// Verificação se o número é par

echo "Digite um número: ";
$numero = trim(fgets(STDIN));
$numeroDois = 2;

if ( $numero % $numeroDois == 0) {
    echo "O número é par";
} else {
    echo "O número não é par";
}

// Ternário
/* echo "Digite um número: ";
$numero = trim(fgets(STDIN));
$numeroDois = 2;

echo ($numero % $numeroDois == 0 ? "O número é par" : "O número não é par")."\n"; */