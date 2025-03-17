<?php

// Verificação de Cálculo de Tarifa Bancária

echo "Digite seu saldo bancário: ";
$saldo = trim(fgets(STDIN));

if ($saldo > 10000) { 
    echo "Seu saldo é R$ ".$saldo." e não foi cobrado tarifa";
}
elseif ($saldo >= 5000 && $saldo <= 10000) { 
    $saldoT2 = $saldo * 1.02;
    echo "Seu saldo é R$ ".$saldoT2." e foi cobrado tarifa de 2%";
}
elseif ($saldo >= 1000 && $saldo <= 4999) { 
    $saldoT4 = $saldo * 1.04;
    echo "Seu saldo é R$ ".$saldoT4." e foi cobrado tarifa de 4%";
}
elseif ($saldo < 1000) { 
    $saldoT8 = $saldo * 1.08;
    echo "Seu saldo é R$ ".$saldoT8." e foi cobrado tarifa de 8%";
}