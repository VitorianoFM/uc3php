<?php

// Controle ARRAY 

$nomes = array("João", "Maria", "José", "Pedro", "Ana");
echo $nomes[0]."\n";

$nomes[5] = "Antonio";

print_r($nomes);

$nomes2 = ["João", "Maria", "José", "Pedro", "Ana"];

$nomes2[100] = "Antonio";

echo count ($nomes2)."\n";

$frutas = ["manga","banana","uva"];

print_r($frutas)."\n";

// Array associativa
$usuarios = [
    "nome" => "João",
    "idade" => 30,
    "endereco" => "Rua da California, 30"
];

echo $usuarios["idade"]."\n";

// array multidimensional

$usuarios2 = [
    ["nome" => "Joao", "idade" => 30, "endereco" => "Rua da California, 30" ],
    ["nome" => "Maria", "idade" => 35, "endereco" => "Rua da Japao, 40" ],
    ["nome" => "Josefina", "idade" => 40, "endereco" => "Rua do Brasil, 50" ]
];

echo $usuarios2[2]["nome"]."\n";

// Funções de Array

echo count($usuarios2)."\n";


array_push($frutas, "maça"); // add

print_r($frutas);

unset($frutas[1]); // remove
print_r($frutas);


foreach ($frutas as $fruta) {
    echo $fruta."\n\n";
}

// Matriz de Arrays
$numeros3 = [
    [30,20,15],
    [25,78,69],
    [57,48,78]
];

$numeros3 [2][1];

print_r($numeros3[2][1]);
echo "\n\n";

// Mostar todos elementos da Matriz

/* foreach ($numeros3 as $linha) {
    foreach ($linha as $valor) {
        print_r($valor."\n\n");
    }
} */

// Mostar todos elementos da Matriz com quebra de linha

// Matriz de Arrays
$numeros4 = [
    [30,20,15],
    [25,78,69],
    [57,48,78]
];

for ($i = 0; $i < count($numeros4); $i++) {
    for ($j = 0; $j < count($numeros4[$i]); $j++) {
        echo $numeros4[$i][$j]."\n";
    }
}