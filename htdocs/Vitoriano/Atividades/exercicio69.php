<?php

// Remover Duplicatas de um Array usando array_unique()

$numeros = [3, 5, 4, 1, 9, 5, 2, 8, 4, 3];
$numerosSemDuplicadas = array_unique($numeros);

print_r($numerosSemDuplicadas);