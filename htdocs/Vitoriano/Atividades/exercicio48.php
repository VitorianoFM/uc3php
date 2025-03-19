<?php

// Escolha de Plano de Internet

echo "Digite o plano de internet escolhido (Básico ou Intermediário ou Avançado ou Ultra): ";
$plano = trim(fgets(STDIN));

switch ($plano) {

    case "Básico":
        echo "Seu plano escolhido foi o Básico, com assinatura de R$ 49,90 e velocidade de 100 Mbps";
        break;

    case "Intermediário":
        echo "Seu plano escolhido foi o Intermediário, com assinatura de R$ 79,90 e velocidade de 300 Mbps";
        break;

    case "Avançado":
        echo "Seu plano escolhido foi o Avançado, com assinatura de R$ 109,90 e velocidade de 600 Mbps";
        break;

    case "Ultra":
        echo "Seu plano escolhido foi o Ultra, com assinatura de R$ 149,90 e velocidade de 1 Gbps";
        break;
       
        default:
        echo "Plano inválido";
        break;
}