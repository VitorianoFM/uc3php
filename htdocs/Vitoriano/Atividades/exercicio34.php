<?php

// Verificação de Desconto em Loja

echo "Digite o valor da compra: R$ ";
$valorCompra = trim(fgets(STDIN));
$percentualDesconto = 0.90; // Desconto de 15%
$valorDesconto;

if ($valorCompra >= 200) {
    $valorDesconto = $valorCompra * $percentualDesconto;
    echo "Sua compra teve um desconto de 10% e o valor ficou R$ ";
    echo $valorDesconto;
} else {
    echo "Valor da compra final é R$ ";
    echo $valorCompra;
}

/* echo "Valor da compra final com desconto de 15% é R$ ".( $valorCompra * $percentualDesconto )."\n"; */