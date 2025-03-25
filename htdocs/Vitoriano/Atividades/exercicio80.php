<!-- Formulário simples com GET para mostrar nome e idade -->

<?php
// Verifica se os parâmetros 'nome' e 'idade' foram enviados via GET
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = htmlspecialchars($_GET['nome']); // Captura e trata o nome
    $idade = intval($_GET['idade']); // Captura e trata a idade como um número inteiro

    echo "Nome: $nome <br>";
    echo "Idade: $idade <br>";
} else {
    echo "Por favor, preencha o formulário.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 80</title>
</head>
<body>
    <form method="get" action="">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
        <label>Idade:</label>
        <input type="number" name="idade" placeholder="Digite sua idade" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>