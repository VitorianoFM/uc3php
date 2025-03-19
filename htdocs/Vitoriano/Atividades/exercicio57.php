<?php

// Caixa Registradora (Intermediário)

$total = 0;

do {
    echo "Digite o valor do produto (0 para finalizar): ";
    $valor = (float)trim(fgets(STDIN));
    
    if ($valor > 0) {
        $total += $valor; // Acumula corretamente
    }
} while ($valor != 0); // Verifica saída

echo "Total da compra: R$ " . number_format($total, 2, ',', '.');



/* $totalCompra = 0; // Variável para armazenar o total da compra

echo "Digite os valores dos produtos a seguir (digite 0 para finalizar):\n";

while (true) {
    $valorCompra = trim(fgets(STDIN)); // Lê o valor inserido

    // Verifica se o valor inserido é 0 para finalizar a compra
    if ($valorCompra == 0) {
        break; // Finaliza o loop
    }

    // Soma o valor ao total da compra
    $totalCompra += $valorCompra;
}

// Exibe o total a pagar
echo "O valor total da compra é: " . $totalCompra . "\n"; */