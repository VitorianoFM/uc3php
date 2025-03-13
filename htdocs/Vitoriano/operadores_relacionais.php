<?php

// Operadores Relacionais
// Adição
$x = 10; // Variável do tipo inteiro
$y = 11; // Variável do tipo inteiro
echo "X = ".$x."\n"; // Quebra de linha
echo "Y = ".$y."\n\n"; // Quebra de linha

// Igual a ==
echo "Igual a: " .($x === $y)."\n"; // Verifica se x é igual a y

// Diferente de !=
echo "Diferente de: " .($x !== $y)."\n"; // Verifica se x é diferente de y

// Maior que >
echo "Maior que: " .($x > $y)."\n"; // Verifica se x é maior que y

// Menor que <
echo "Menor que: " .($x < $y)."\n"; // Verifica se x é menor que y

// Maior ou igual a >=
echo "Maior ou igual a: " .($x >= $y)."\n"; // Verifica se x é maior ou igual a y

// Menor ou igual a <=
echo "Menor ou igual a: " .($x <= $y)."\n"; // Verifica se x é menor ou igual a y

// Ternário
echo "Ternário: ".($x > $y ? "X é maior que Y" : "Y é maior que X")."\n"; // Verifica se x é maior que y