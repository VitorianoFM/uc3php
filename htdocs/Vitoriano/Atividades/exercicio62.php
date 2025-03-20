<?php

// Simulando um Caixa Eletrônico

do {
    echo "Digite o valor do saque: R$ ";
    $valorSaque = (int)trim(fgets(STDIN));

    if ($valorSaque % 10 != 0) {
        echo "Não conseguimos sacar o valor de R$ " . $valorSaque . " pois ele não é multiplo de 10.\n"; 
    }
} while ($valorSaque % 10 != 0);

echo "O valor a ser sacado é R$ " . $valorSaque . "\n";
