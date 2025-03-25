
<!-- Implementar um sistema de segurança para login -->
<?php

// Sessão iniciada
session_start();

$usuarioDigitado = $_GET["nome"];
$senhaDigitado = $_GET["senha"]; 

// Acesso
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if(isset($_COOKIE["bloqueado"])) {
    echo "Você foi bloqueado por 60 segundos!";
    exit;
}

if(isset($_SESSION["tentativas"])) {
    $_SESSION["tentativas"] = 1;
} else {
    $_SESSION["tentativas"]++;
}

if($usuarioDigitado === $usuarioCorreto && $senhaDigitado === $senhaCorreta) {
    echo "Seja bem-vindo, $usuarioCorreto!";
    unset($_SESSION["tentativas"]);
} else {
    echo "Usuário ou senha inválidos! Você tentou ".$_SESSION["tentativas"]." de 3 vezes.";

    if($_SESSION["tentativas"] >= 3) {
        setcookie("bloqueado", time(), time() + 60);
        echo "Você escedeu o número de tentativas, volte a tentar após 1 minuto!";
        unset($_SESSION["tentativas"]);
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 78 - Login Seguro</title>
</head>
<form>
    
    <?php if(isset($_SESSION['tentativas']) && $_SESSION['tentativas'] > 0): ?>
        <p style="color: red;">Credenciais inválidas! Tentativas restantes: <?= 3 - $_SESSION['tentativas'] ?></p>
    <?php endif; ?>

    <form method="post"></form>
        <input type="text" name="usuario" placeholder="Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>