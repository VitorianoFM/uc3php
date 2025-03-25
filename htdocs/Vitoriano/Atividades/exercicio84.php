<!-- Verificar se o usuário tem idade para votar -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $idade = intval($_POST['idade']);


    if ($idade > 0) {

        if ($idade >= 16) {
            echo "<p style='color: green;'>Você tem $idade anos e <strong>pode votar</strong>!</p>";
        } else {
            echo "<p style='color: red;'>Você tem $idade anos e <strong>não pode votar</strong>.</p>";
        }
    } else {
        echo "<p style='color: red;'>Por favor, insira uma idade válida.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 84 - Verificação de Idade para Votar</title>
</head>
<body>
    <h1>Verificação de Idade para Votar</h1>
    <form method="post" action="">
        <label>Idade:</label>
        <input type="number" name="idade" placeholder="Digite sua idade" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>