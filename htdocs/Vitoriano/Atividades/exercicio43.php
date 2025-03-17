<?php

// Verificação de Faixas Etárias

echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));

if ($idade >= 0 && $idade <= 12) { 
    echo "Sua faixa etária é: Criança";
}
else if ($idade >= 13 && $idade <= 17) { 
    echo "Sua faixa etária é: Adolescente";
}
else if ($idade >= 18 && $idade <= 59) { 
    echo "Sua faixa etária é: Adulto";
}
else if ($idade > 60) { 
    echo "Sua faixa etária é: Idoso";
}