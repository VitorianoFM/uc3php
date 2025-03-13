<?php

// Operadores Lógicos
echo "Qual sua idade: ";
$idade = trim(fgets(STDIN)); // Variável do tipo string
echo "É convidado VIP? ";
$temVIP = trim(fgets(STDIN)); // Variável do tipo boolean

echo ($idade >= 18 && $temVIP) ? "Entrada permitida" : "Entrada negada"."\n"; // true