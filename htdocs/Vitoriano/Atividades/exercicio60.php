<?php

// Jogo de Adivinhação

$numRandom = rand(1, 100);

do {
    echo "Digite um número para tentar acertar o número aleatório: ";
    $numero = trim(fgets(STDIN));
    
    if ($numero == $numRandom) {
        $numAleatorio += $numero; // Acumula corretamente
        /* $qtdnumero += 1; */
        $qtdnumero++;
    }
} while ($numero !== $numRandom); // Verifica saída

$medianumero = $numAleatorio / $qtdnumero;
echo "Você acertou o número aleatório: " . $numRandom . " com " . $qtdnumero . " tentativas";



/* $totalCompra = 0; // Variável para armazenar o total da compra

echo "Digite a nota do aluno para calcular a média (-1 para finalizar): \n";

while (true) {
    $nota = trim(fgets(STDIN)); // Lê o valor inserido

    // Verifica se o valor inserido é 0 para finalizar a compra
    if ($nota == 0) {
        break; // Finaliza o loop
    }

    // Soma o valor ao total da compra
    $totalCompra += $nota;
}

echo "A média do aluno é: " . $totalCompra . "\n"; */