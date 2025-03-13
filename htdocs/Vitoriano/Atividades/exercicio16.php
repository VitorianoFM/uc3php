<?php

// Operadores Lógicos
$contaAtiva = true; // Variável do tipo boolean
$bloqueada = false; // Variável do tipo boolean

echo ($contaAtiva && !$bloqueada) ?"Transação permitida\n":"Conta bloqueada\n"; // true