<!-- Login simples com POST -->

<?php

$usuarioValido = "admin";
$senhaValida = "1234";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = htmlspecialchars($_POST['usuario']);
    $senha = htmlspecialchars($_POST['senha']);

    if ($usuario === $usuarioValido && $senha === $senhaValida) {
        echo "<p style='color: green;'>Login realizado com sucesso! Bem-vindo, $usuario.</p>";
    } else {
        echo "<p style='color: red;'>Erro: Usuário ou senha incorretos.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 85 - Login Simples</title>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="">
        <label>Usuário:</label>
        <input type="text" name="usuario" placeholder="Digite seu usuário" required>
        <br><br>
        <label>Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <br><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>