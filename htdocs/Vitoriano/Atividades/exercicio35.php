<?php

// Verificação Login e Senha

echo "Digite seu login: ";
$nome = trim(fgets(STDIN));
echo "Digite sua senha: ";
$senha = trim(fgets(STDIN));

if ( $nome == "admin" && $senha == 1234) {
    echo "Login bem-sucedido!";

} else  {
    echo "Você digitou o login ou senha errado!";
}