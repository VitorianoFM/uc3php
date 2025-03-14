<?php

// Verifica a Idade Mínima

echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));
$idadeMaior = 18; // Variável do tipo inteiro

if ( $idade >= $idadeMaior) {
    echo "Aprovado a CNH";
} else {
    echo "Idade insuficiente para obter a CNH";
}

// Ternário
/* echo ($idade >= $idadeMaior ? "Aprovado a CNH" : "Idade insuficiente para obter a CNH")."\n"; */ 