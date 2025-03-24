<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 75</title>
</head>
<body>
    
    <!-- Criar um cookie de boas-vindas SESSION e COOKIE -->
    <?php

        // Sessão iniciada
        session_start();
        $_SESSION['usuario'] = "Vitoriano";

        // Para acessar a sessão
        echo "Seja bem-vindo(a) " . $_SESSION["usuario"] . "!";

    ?>

</body>
</html>