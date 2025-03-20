<?php

// Pedir senha até ser correta

echo "Digite sua senha: \n";
$senha =  trim(fgets(STDIN));

while (true) {
    echo "Confirme sua senha: \n";
    $senhaDigitada = trim(fgets(STDIN));

    // Verifica se a senha digitada é igual à senha original
    if ($senha == $senhaDigitada) {
        break; // Finaliza o loop
    }
    
}

echo "Acesso liberado, bem-vindo!\n";