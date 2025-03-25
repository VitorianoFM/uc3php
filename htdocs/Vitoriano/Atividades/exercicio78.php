<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioDigitado = $_POST["usuario"] ?? '';
    $senhaDigitado = $_POST["senha"] ?? '';
} else {
    $usuarioDigitado = '';
    $senhaDigitado = '';
}

if(!isset($_SESSION["tentativas"])) {
    $_SESSION["tentativas"] = 0;
}

// Acesso
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if(isset($_COOKIE["bloqueado"])) {
    $tempo_bloqueio = time() - $_COOKIE["bloqueado"];
    if($tempo_bloqueio < 60) {
        $tempo_restante = 60 - $tempo_bloqueio;
        die("Acesso bloqueado. Tente novamente em $tempo_restante segundos.");
    } else {
        setcookie("bloqueado", "", time() - 3600); // Expira o cookie
        unset($_SESSION["tentativas"]);
    }
}

// Processamento do login apenas se for POST
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if($usuarioDigitado === $usuarioCorreto && $senhaDigitado === $senhaCorreta) {
        echo "Seja bem-vindo, $usuarioCorreto!";
        unset($_SESSION["tentativas"]);
    } else {

        $_SESSION["tentativas"]++;
        
        echo "Usuário ou senha inválidos! Você tentou ".$_SESSION["tentativas"]." de 3 vezes.";

        if($_SESSION["tentativas"] >= 3) {

            setcookie("bloqueado", time(), time() + 60); // 1 minuto
            unset($_SESSION["tentativas"]);
            header("Refresh:0"); // Recarrega a página para aplicar o bloqueio
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Seguro</title>
</head>
<body>

    <?php if(isset($_SESSION['tentativas']) && $_SESSION['tentativas'] > 0): ?>
        <p style="color: red;">
            Credenciais inválidas! Tentativas restantes: <?= 3 - $_SESSION['tentativas'] ?>
        </p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuário" required><br>
        <input type="password" name="senha" placeholder="Senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>