<?php

// Criar um Array de Nomes e Exibir em Ordem Alfabética (usando a função sort())

$nomes = ["João", "Maria", "José", "Pedro", "Ana", "Carlos", "Mariana", "Fernando", "Beatriz", "Ricardo"];

sort($nomes);

foreach ($nomes as $nome) {
    echo "".$nome."\n";
}