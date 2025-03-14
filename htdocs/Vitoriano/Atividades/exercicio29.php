<?php

// Verificação se o primeiro nome é igual ao segundo

echo "Digite o primeiro nome: ";
$nome1 = trim(fgets(STDIN));
echo "Digite o segundo nome: ";
$nome2 = trim(fgets(STDIN));

echo ($nome1 === $nome2 ? "O nome é igual" : "O nome não é igual")."\n";