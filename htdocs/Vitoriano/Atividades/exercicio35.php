<?php

// Verificação Login e Senha

echo "Digite seu login: ";
$nome = trim(fgets(STDIN));
echo "Digite sua senha: ";
$senha = trim(fgets(STDIN));

if ( $nome == "John" && $senha == 123456) {
    echo "Você está logado";

} else  {
    echo "Você digitou o login ou senha errado!";
}