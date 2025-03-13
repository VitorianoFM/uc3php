<?php

// Operadores Relacionais
// Adição
$notaAluno = rand(0, 10); // Variável do tipo inteiro
$notaAprovado = 7; // Variável do tipo inteiro
$notaReprovado = 4; // Variável do tipo inteiro

echo "Nota do Aluno: ".$notaAluno."\n\n"; // Gera um número aleatório de 0 a 10

// Ternário
echo "Situação: ".($notaAluno >= $notaAprovado ? "Aprovado" : ($notaAluno >= $notaReprovado && $notaAluno < $notaAprovado ? "Recuperação" : "Reprovado"))."\n"; // Verifica se x é maior que y