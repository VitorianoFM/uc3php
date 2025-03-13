<?php

// Operadores Aritiméticos
// Adição
$a = 10; // Variável do tipo inteiro
$b = 3; // Variável do tipo inteiro
echo "A = ".$a."\n"; // Quebra de linha
echo "B = ".$b."\n\n"; // Quebra de linha

echo "Soma: ".$a + $b."\n";

// Subtração
echo "Subtração: ".$a - $b."\n";

// Multiplicação
echo "Multiplicação: ".$a * $b."\n";

// Divisão
echo "Divisão: ".$a / $b."\n";

// Módulo | Módulo faz várias divisões e o resto da divisão se for igual a 0 é par, se for diferente de 0 é ímpar
echo "Módulo: ".$a % $b."\n";

// Exponenciação (Potencia)
echo "Potencia: ".$a ** $b."\n";

// Incremento
echo "Incremento: ".$a++."\n";

// Decremento
echo "Decremento: ".$a--."\n";

// Arredondar
echo "Arredondar para cima: ".round(3.6)."\n"; // Arredondar para cima
echo "Arredondar para cima: ".ceil(7.2)."\n"; // Arredondar para cima
echo "Arredondar para baixo: ".floor(3.9)."\n"; // Arredondar para baixo
echo "Gera um número aleatório (até 1000): ".rand(0, 1000)."\n"; // Gera um número aleatório de 0 a 1000