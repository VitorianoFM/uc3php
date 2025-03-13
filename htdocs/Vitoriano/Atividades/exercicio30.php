<?php

// Verifica a Idade Mínima

echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));
$idadeMaior = 18; // Variável do tipo inteiro

// Ternário
echo ($idade >= $idadeMaior ? "Maior de 18 anos, pode dirigir" : "Menor de 18 anos, não pode dirigir")."\n"; 