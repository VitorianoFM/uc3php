<?php

// Jogo de Adivinhação

$numRandom = rand(1, 100);
$tentativas = 0; // Initialize the number of attempts
$acertou = false; // Flag to check if the user guessed correctly

echo "Bem-vindo ao Jogo de Adivinhação!\n";
echo "Tente adivinhar o número entre 1 e 100.\n";

do {
    echo "Digite um número: ";
    $numero = (int) trim(fgets(STDIN)); // Read input and convert to integer
    $tentativas++; // Increment the number of attempts

    if ($numero < $numRandom) {
        echo "O número é maior.\n";
    } elseif ($numero > $numRandom) {
        echo "O número é menor.\n";
    } else {
        $acertou = true;
    }
} while (!$acertou); // Continue until the user guesses correctly

echo "Parabéns! Você acertou o número $numRandom em $tentativas tentativas.\n";