<?php

// Conversor de Moeda

echo "Digite a moeda que quer converter (USD ou EUR ou GBP ou ARS): ";
$moeda = trim(fgets(STDIN));
$cemReais = 100;

switch ($moeda) {

    case "USD":
        $dolar = $cemReais / 5.68;
        echo "Com R$ 100 você terá U$ ".$dolar;
        break;

    case "EUR":
        $euro = $cemReais / 6.21;
        echo "Com R$ 100 você terá € ".$euro;
        break;

    case "GBP":
        $libra = $cemReais / 7.38;
        echo "Com R$ 100 você terá £ ".$libra;
        break;

    case "ARS":
        $peso = $cemReais / 0.0053;
        echo "Com R$ 100 você terá ARG$ ".$peso;
        break;
       
        default:
        echo "Moeda inválido";
        break;
}