<?php

// Verificação de Frete Grátis

echo "Digite o valor da compra: R$ ";
$valorCompra = trim(fgets(STDIN));
$valorFrete = 20; // Valor do Frete R$ 20
$frete;

if ($valorCompra <= 300) {
    $frete = $valorCompra + $valorFrete;
    echo "Valor da compra com frete (R$20) é de R$ ";
    echo $frete;
} else {
    echo "Você recebeu frete grátis e o valor da compra é R$ ";
    echo $valorCompra;
}

/* echo "Valor da compra final com desconto de 15% é R$ ".( $valorCompra * $percentualDesconto )."\n"; */