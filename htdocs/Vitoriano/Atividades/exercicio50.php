<?php

// Escolha de Tipo de Café

echo "Digite o tipo de café (Expresso ou Cappucino ou Latte ou Mocha): ";
$cafe = trim(fgets(STDIN));

switch ($cafe) {

    case "Expresso":
        echo "Sua escolha foi Expresso, o valor do café é R$ 5,00.";
        break;

    case "Cappucino":
        echo "Sua escolha foi Cappucino, o valor do café é R$ 7,00.";
        break;

    case "Latte":
        echo "Sua escolha foi Latte, o valor do café é R$ 6,50.";
        break;

    case "Mocha":
        echo "Sua escolha foi Mocha, o valor do café é R$ 8,00.";
        break;
       
        default:
        echo "Opção inválida";
        break;
}