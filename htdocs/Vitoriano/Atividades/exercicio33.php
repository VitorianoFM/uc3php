<?php

// Verificação a Média Escolar

$notaAluno = rand(0, 10); // Variável do tipo inteiro
$notaAprovado = 7; // Variável do tipo inteiro
$notaReprovado = 5; // Variável do tipo inteiro

echo "Nota do Aluno: ".$notaAluno."\n\n"; // Gera um número aleatório de 0 a 10

if ( $notaAluno >= $notaAprovado ) {
    echo "Aprovado";
} elseif ( $notaAluno >= $notaReprovado && $notaAluno < $notaAprovado) { 
    echo "Recuperação";
} else {
    echo "Reprovado";
}


// Ternário
/* echo "Situação: ".($notaAluno >= $notaAprovado ? "Aprovado" : ($notaAluno >= $notaReprovado && $notaAluno < $notaAprovado ? "Recuperação" : "Reprovado"))."\n"; // Verifica se x é maior que y */