<?php

// Classificação de Nível de Jogador

echo "Digite sua experiência (XP) atual: ";
$xp = trim(fgets(STDIN));

switch (true) {

    case ($xp < 1000):
        echo "Com seu XP, você é um nível: Ferro";
        break;

    case ($xp >= 1000 && $xp <= 2499): 
        echo "Com seu XP, você é um nível: Bronze";
        break;

    case ($xp >= 2500 && $xp <= 4999): 
        echo "Com seu XP, você é um nível: Prata";
        break;

    case ($xp >= 5000 && $xp <= 7999): 
        echo "Com seu XP, você é um nível: Ouro";
        break;

    case ($xp >= 8000 && $xp <= 9999): 
        echo "Com seu XP, você é um nível: Diamente";
        break;

    case ($xp >= 10000): 
        echo "Com seu XP, você é um nível: Lendário";
        break;

    }