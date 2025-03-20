<?php

// Contagem de Caracteres em Nomes

$nomes = array("João", "Maria", "José", "Pedro", "Ana");

foreach ($nomes as $nome) {
    $numCaracteres = strlen($nome);
    echo "O nome " . $nome . " tem " . $numCaracteres . " caracteres.\n";
}