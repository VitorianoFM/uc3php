<?php

// Classificação de Dia da Semana

echo "Digite um numero de 1 a 7: ";
$dia = trim(fgets(STDIN));

switch ($dia) {

    case 1:
        echo "Segunda-feira";
        break;

    case 2:
        echo "Terça-feira";
        break;

    case 3:
        echo "Quarta-feira";
        break;

    case 4:
        echo "Quinta-feira";
        break;
    
    case 5:
        echo "Sexta-feira";
        break;

    case 6:
        echo "Sabado";
        break;

    case 7:
        echo "Domingo";
        break;
    
        default:
        echo "Número inválido";
        break;
}