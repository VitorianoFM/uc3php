<?php

// Operadores Lógicos
echo "Qual sua idade: ";
$idade = trim(fgets(STDIN)); // Variável do tipo string
echo "Tem CNH: ";
$temCNH = trim(fgets(STDIN)); //

echo ($idade >= 18 && $temCNH) ? "Pode dirigir" : "Não pode dirigir"."\n"; // true