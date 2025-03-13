<?php

// Operadores Lógicos
$a = 10; // Variável do tipo inteiro
$b = 5; // Variável do tipo inteiro
$c = "chuva"; // Variável do tipo string
$d = "sol"; // Variável do tipo string
echo "A = ".$a."\n"; // Quebra de linha
echo "B = ".$b."\n"; // Quebra de linha
echo "C = ".$c."\n"; // Quebra de linha
echo "D = ".$d."\n\n"; // Quebra de linha

// Operador E (&&)
echo $a > $b && $a == $b; // false
echo $c == "chuva" && $d == "sol"; // true

// Operador OU (||)
echo $a > $b || $a == $b; // true
echo $c == "sol" || $d == "sol"; // true

echo (($c == "sol") or ($d == "sol")); // true
echo !(($c == "sol") or ($d == "sol")); // false