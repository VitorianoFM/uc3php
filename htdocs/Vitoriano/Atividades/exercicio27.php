<?php

// Calcular o Índice de Massa Corporal (IMC)

echo "Qual idade do João: ";
$idadeJoao = trim(fgets(STDIN)); 
echo "Qual idade da Maria: ";
$idadeMaria = trim(fgets(STDIN));

echo "Atividade 27: ".($idadeJoao > $idadeMaria ? "João é mais velho que Maria" : "Maria é mais velha que João")."\n"; // Verifica se idadeJoao é maior que idadeMaria