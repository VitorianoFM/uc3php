<?php

// Calcular o Índice de Massa Corporal (IMC)

echo "Qual seu peso: ";
$peso = trim(fgets(STDIN));
echo "Qual sua altura: ";
$altura = trim(fgets(STDIN));

$imc = ($peso/($altura*$altura));
echo "O seu IMC é: ".$imc."\n";

echo "Baixo peso muito grave: ".($imc < 16 ? "X" : "")."\n";
echo "Obesidade grau I: ".($imc >= 30 && $imc <= 34.99 ? "X" : "")."\n";

/*
Baixo peso muito grave: abaixo de 16 kg/m².
Baixo peso grave: entre 16 e 16,99 kg/m².
Baixo peso: entre 17 e 18,49 kg/m².
Peso normal: entre 18,50 e 24,99 kg/m².
Sobrepeso: entre 25 e 29,99 kg/m².
Obesidade grau I: entre 30 e 34,99 kg/m².
Obesidade grau II: entre 35 e 39,99 kg/m².
Obesidade grau III (obesidade mórbida): maior que 40 kg/m².
*/