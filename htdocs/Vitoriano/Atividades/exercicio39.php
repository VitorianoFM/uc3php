<?php

// Verificação de Desconto de Controle

echo "Digite o valor da compra: R$ ";
$valorCompra = trim(fgets(STDIN));
$descontoCinco = 0.95; // Desconto de 05%
$descontoDez = 0.90; // Desconto de 10%
$valorDesconto;

if ($valorCompra < 100) {
    echo "Sua compra ficou R$ ";
    echo $valorCompra;
}
if ($valorCompra >= 100 && $valorCompra < 300) {
    $valorDesconto = $valorCompra * $descontoCinco;
    echo "Sua compra teve um desconto de 5% e o valor ficou R$ ";
    echo $valorDesconto;
} 
if ($valorCompra > 300) {
    $valorDesconto = $valorCompra * $descontoDez;
    echo "Sua compra teve um desconto de 10% e o valor ficou R$ ";
    echo $valorDesconto;
}

/* echo "Valor da compra final com desconto de 15% é R$ ".( $valorCompra * $percentualDesconto )."\n"; */