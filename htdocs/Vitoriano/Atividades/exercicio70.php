<?php

// Criando um carrinho de compras com array associativo usando foreach

$carrinho = [
    [
        "produto" => "Camiseta",
        "valor" => 30.00,
        "quantidade" => 5,
    ],
    [
        "produto" => "Calça",
        "valor" => 40.50,
        "quantidade" => 7,
    ],
    [
        "produto" => "Tenis",
        "valor" => 75.90,
        "quantidade" => 11,
    ],
    [
        "produto" => "Meia",
        "valor" => 20.35,
        "quantidade" => 3,
    ]
];

$total = 0;

foreach ($carrinho as $item) {
    $subtotal = $item["quantidade"] * $item["valor"];
    $total += $subtotal;

    echo "Produto: " . $item["produto"] . " | Quantidade: " . $item["quantidade"] . " | Valor Unitário: R$ " . number_format($item["valor"], 2, ",", ".") . " | Subtotal: R$ " . number_format($subtotal, 2, ",", ".") . "\n";
}

echo "\nTotal do Carrinho: R$ " . number_format($total, 2, ",", ".") . "\n";