<?php

// Verificação Imposto de Renda

echo "Digite seu salário: R$ ";
$salario = trim(fgets(STDIN));

if ( $salario <= 2.500) {
    echo "Isento";

} if ( $salario >= 2.501 && $salario < 4.500 ) {
    echo "7.5% de Imposto";

} if ( $salario >= 4.501 && $salario < 6.500 ) {
    echo "15% de Imposto";
    
} if ( $salario > 6.500 ) {
    echo "27.5% de Imposto";   
}


/* if ( $salario <= 2.500) {
    echo "Isento";

} elseif ( $salario >= 2.501 && $salario < 4.500 ) {
    echo "7.5% de Imposto";

} elseif ( $salario >= 4.501 && $salario < 6.500 ) {
    echo "15% de Imposto";
    
} else {
    echo "27.5% de Imposto";   
} */