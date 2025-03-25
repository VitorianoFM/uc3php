<!-- Implementar um sistema de segurança para login -->
<?php

// Sessão iniciada
session_start();

// Acesso
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

if(isset($_COOKIE['bloqueado'])) {
    $tempoRestante = time() - $_COOKIE['bloqueado'];
    if($tempoRestante < 60) {
        die("Acesso bloqueado. Tente novamente em " .(60 - $tempoRestante). " segundos.");
    } else {
        setcookie('bloqueado', '', time() - 3600);
        unset($_SESSION['tentativas']);
    } 
}

if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';;
    
    if($usuario === $usuarioCorreto && $senha === $senhaCorreta) {
        unset($_SESSION['tentativas']);
        header('Location: painel.php');
        exit;
    } else {
        $_SESSION['tentativas']++;

        if($_SESSION['tentativas'] >= 3) {
            setcookie('bloqueado', time(), time() + 60);
            unset($_SESSION['tentativas']);
            header('Location: '.$_SERVER['PHP_SELF']);
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