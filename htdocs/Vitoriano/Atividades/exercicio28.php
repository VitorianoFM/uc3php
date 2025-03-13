<?php

// Verificação se o número é par

echo "Digite um número: ";
$numero = trim(fgets(STDIN));
$numeroDois = 2;

echo ($numero % $numeroDois ? "O número não é par" : "O número é par")."\n";