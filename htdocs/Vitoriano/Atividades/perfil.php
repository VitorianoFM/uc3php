<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil Pessoal</title>
</head>
<body>
    
    <H1 style="font-weight: bold;">Perfil Pessoal</H1>    

    <p>
    <?php
        // Minhas primeiras variável
        $nome = "Fulano"; // Variável do tipo String
        $idade = 30; // Variável do tipo Inteiro
        $date = date('d/m/Y'); // Variável do tipo Date('d/m/Y') | Y = 2025 e y = 25
        echo "Meu nome é $nome, tenho $idade anos e hoje é $date."; // Exibindo o valor das variáveis em echo
        echo "<br>"; // Quebra de linha
        print "Meu nome é " . $nome . ", tenho " . $idade . " anos e hoje é " . $date . "."; // Exibindo o valor das variáveis em print
        echo "<br>";
    ?>
    </p>

</body>
</html>