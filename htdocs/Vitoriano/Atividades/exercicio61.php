<?php

// Solicitar número positivo

do {
    echo "Digite um número positivo: ";
    $numero = (int)trim(fgets(STDIN));

    if ($numero <= 0) {
        echo "O número " . $numero . " não é positivo.\n"; 
    }
} while ($numero <= 0);

echo "O número " . $numero . " é positivo.";


/* echo "Digite um número positivo: ";
$numero = (int)trim(fgets(STDIN));

do {
    $numero >= 1;
    echo "O número ".$numero." não é positivo.\n";
    echo "Digite um número positivo: ";
    $numero = trim(fgets(STDIN));
    
} while ($numero <= -1); // Verifica saída

echo "O número ".$numero." é positivo."; */