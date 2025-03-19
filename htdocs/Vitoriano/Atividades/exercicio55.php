<?php

// Cálculo de Média de Notas (For + If Else)

$notaAluno = rand(0, 10); // Variável do tipo inteiro
$notaAprovado = 7; // Variável do tipo inteiro

echo "Nota do Aluno: ".$notaAluno."\n\n"; // Gera um número aleatório de 0 a 10

if ( $notaAluno >= $notaAprovado ) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}


/* $notas = [7, 6, 8, 5, 9]; // Array com as 5 notas
$soma = 0;

// Calcula a soma das notas
for ($i = 0; $i < count($notas); $i++) {
  $soma += $notas[$i];
}

// Calcula a média
$media = $soma / count($notas);

// Verifica se o aluno foi aprovado ou reprovado
if ($media >= 7) {
  echo "A média é: " . $media . ". Aluno aprovado!";
} else {
  echo "A média é: " . $media . ". Aluno reprovado.";
} */