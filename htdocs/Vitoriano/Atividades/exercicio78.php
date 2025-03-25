<?php
session_start();

// Problema 1: Método GET inseguro para credenciais
// Correção: Usar POST e verificar submissão do formulário
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarioDigitado = $_POST["usuario"] ?? '';
    $senhaDigitado = $_POST["senha"] ?? '';
} else {
    $usuarioDigitado = '';
    $senhaDigitado = '';
}

// Problema 2: Lógica invertida na inicialização da session
// Correção: Inicializar corretamente o contador
if(!isset($_SESSION["tentativas"])) {
    $_SESSION["tentativas"] = 0;
}

// Credenciais
$usuarioCorreto = "admin";
$senhaCorreta = "1234";

// Problema 3: Verificação incompleta do bloqueio
// Correção: Verificar tempo restante do bloqueio
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
        // Problema 4: Incremento incorreto das tentativas
        $_SESSION["tentativas"]++;
        
        echo "Usuário ou senha inválidos! Você tentou ".$_SESSION["tentativas"]." de 3 vezes.";

        if($_SESSION["tentativas"] >= 3) {
            // Problema 5: Configuração incorreta do cookie
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
    <!-- Problema 6: Formulário duplicado e método incorreto -->
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