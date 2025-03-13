<?php

// Operadores Aritiméticos

$valorCompra = rand(1, 100); // Variável do tipo inteiro
$percentualDesconto = 0.85; // Desconto de 15%

echo "Valor da compra parcial é R$ ".$valorCompra."\n";

echo "Valor da compra final com desconto de 15% é R$ ".( $valorCompra * $percentualDesconto )."\n";