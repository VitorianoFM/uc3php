<!-- Receber nome e sobrenome com POST -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['sobrenome'])) {
        $nome = htmlspecialchars($_POST['nome']);
        $sobrenome = htmlspecialchars($_POST['sobrenome']);

        echo "Nome: $nome <br>";
        echo "Sobrenome: $sobrenome <br>";
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    echo "Por favor, preencha o formulário.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 83</title>
</head>
<body>
    <form method="post" action="">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>