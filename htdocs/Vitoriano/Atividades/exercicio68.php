<?php

// Encontrar o Maior e o Menor Número de um Array

$numeros = [3, 5, 1, 9, 2, 8, 4];

$maior = $numeros[0];
$menor = $numeros[0];

foreach ($numeros as $numero) {
    if ($numero > $maior) {
        $maior = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
}

echo "O maior número é: " . $maior . "\n";
echo "O menor número é: " . $menor . "\n";


/* $numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$maior = max($numeros);
$menor = min($numeros);

echo "O numero maior é: " . $maior . "\n";
echo "O numero menor é: " . $menor . "\n"; */