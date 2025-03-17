<?php

// Controle SWITCH

$escolha = 2;

switch ($escolha) {

    case 1:
        echo "Você escolheu Pizza";
        break;

    case 2:
        echo "Você escolheu Hamburguer";
        break;

    case 3:
        echo "Você escolheu Salada";
        break;

    default:
        echo "Escolha inválida";
        break;
}