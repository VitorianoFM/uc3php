<?php

// Controle FOREACH 

$nomes = array("João", "Maria", "José", "Pedro", "Ana");

/* echo $nomes[0]; */
foreach ($nomes as $nome) {
    echo "O nome é: " . $nome . "\n";
}

/* <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle ARRAY </title>
</head>
<body>
    
    <table>
    
    <tr><td>Nome</td></tr>
    <?php 
    
    $nomes = array("João", "Maria", "José", "Pedro", "Ana");

echo $nomes[0]; 
foreach ($nomes as $nome) {
    echo "O nome é: ".$nome."\n";
}
    
    ?>
    
    </table>

</body>
</html> */