<?php

// Cálculo de Média de Notas

$total = 0;
$qtdNota = 0;

do {
    echo "Digite a nota do aluno para calcular a média (-1 para finalizar): ";
    $nota = (float)trim(fgets(STDIN));
    
    if ($nota > -1) {
        $total += $nota; // Acumula corretamente
        /* $qtdNota += 1; */
        $qtdNota++;
    }
} while ($nota != -1); // Verifica saída

$mediaNota = $total / $qtdNota;
echo "A média do aluno é: " . number_format($mediaNota, 2, ',', '.');



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