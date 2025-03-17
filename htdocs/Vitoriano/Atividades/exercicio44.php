<?php

// Verificação de Categoria de um Atleta

echo "Digite sua idade: ";
$idade = trim(fgets(STDIN));

if ($idade >= 0 && $idade <= 9) { 
    echo "Sua categoria de atleta é: Mirim";
}
else if ($idade >= 10 && $idade <= 14) { 
    echo "Sua categoria de atleta é: Infantil";
}
else if ($idade >= 15 && $idade <= 19) { 
    echo "Sua categoria de atleta é: Juvenil";
}
else if ($idade >= 20 && $idade <= 35) { 
    echo "Sua categoria de atleta é: Adulto";
}
else if ($idade > 35) { 
    echo "Sua categoria de atleta é: Master";
}