<?php

// Verificação de Risco de Crédito

echo "Digite seu SCORE atual: ";
$score = trim(fgets(STDIN));

if ($score >= 800 && $score <= 1000) { 
    echo "Seu SCORE de Crédito é: Ótimo";
}
else if ($score >= 600 && $score <= 799) { 
    echo "Seu SCORE de Crédito é: Bom";
}
else if ($score >= 400 && $score <= 599) { 
    echo "Seu SCORE de Crédito é: Regular";
}
else if ($score > 200 && $score <= 399) { 
    echo "Seu SCORE de Crédito é: Ruim";
}
else if ($score <= 200) { 
    echo "Seu SCORE de Crédito é: Péssimo";
}