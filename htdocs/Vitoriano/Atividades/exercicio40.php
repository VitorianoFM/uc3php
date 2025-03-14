<?php

// Verificação de Desconto de Controle

echo "Digite o tamanho do lado A: ";
$ladoA = trim(fgets(STDIN));

echo "Digite o tamanho do lado B: ";
$ladoB = trim(fgets(STDIN));

echo "Digite o tamanho do lado C: ";
$ladoC = trim(fgets(STDIN));

if ($ladoA == $ladoB && $ladoB == $ladoC) { 
    echo "Todos os lados iguais -> Equilátero";
}
if ($ladoA == $ladoB || $ladoB == $ladoC || $ladoA == $ladoC) { 
    echo "Dois lados -> Isósceles";
} 
if ($ladoA !== $ladoB || $ladoB !== $ladoC || $ladoA !== $ladoC) { 
    echo "Todos os lados diferentes -> Escaleno";
}

/* echo "Valor da compra final com desconto de 15% é R$ ".( $valorCompra * $percentualDesconto )."\n"; */