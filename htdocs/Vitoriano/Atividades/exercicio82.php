<!-- Simular uma busca de produto com GET -->

<?php

if (isset($_GET['produto'])) {
    $produto = htmlspecialchars($_GET['produto']); // Captura e trata o nome do produto

    echo "Você buscou por: <strong>$produto</strong> <br>";
    echo "Resultados da busca para '$produto': <br>";
    echo "1. $produto - R$ 50,00 <br>";
    echo "2. $produto Premium - R$ 120,00 <br>";
    echo "3. Kit $produto - R$ 180,00 <br>";
} else {
    echo "Por favor, insira o nome de um produto para buscar.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Produto</title>
</head>
<body>
    <form method="get" action="">
        <label>Buscar Produto:</label>
        <input type="text" name="produto" placeholder="Digite o nome do produto" required>
        <button type="submit">Buscar</button>
    </form>
</body>
</html>