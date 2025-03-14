<?php

// Verificação se o número é par

echo "Digite um número: ";
$numero = trim(fgets(STDIN));
$numeroDois = 2;

echo ($numero % $numeroDois == 0 ? "O número é par" : "O número não é par")."\n";