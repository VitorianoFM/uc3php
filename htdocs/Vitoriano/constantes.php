<?php

define("TAXA", 0.08); // Definindo uma constante
echo "A taxa é de " . TAXA . "%."; // Exibindo o valor da constante

echo "<br>"; // Quebra de linha

const PI = 3.14159; // Definindo uma constante
echo PI ." é o valor de PI."; // Exibindo o valor da constante

echo "<br>"; // Quebra de linha

$nome = "John"; // Variável do tipo String
$sobrenome = "Ramalho"; // Variável do tipo String
$texto = "Aprendendo PHP com o mestre"; // Variável do tipo String

echo $nome .' '. $sobrenome; // Exibindo o valor das variáveis
echo "<br>"; // Quebra de linha

print $nome ." ". $sobrenome; // Exibindo o valor das variáveis
print "<br>"; // Quebra de linha

echo strlen($sobrenome);
echo "<br>"; // Quebra de linha

// Transformar um texto em maiúsculo
echo strtoupper($nome);
echo "<br>"; // Quebra de linha

// Transformar um texto em minúsculo
echo strtolower($nome);
echo "<br>"; // Quebra de linha

// Substituir um texto
echo str_replace("PHP", "Laravel", $texto); // Substituindo a palavra PHP por Laravel
echo "<br>"; // Quebra de linha

// Extrair parte de um texto
echo substr($texto, 11, 20); // Extraindo a palavra PHP
echo "<br>"; // Quebra de linha

