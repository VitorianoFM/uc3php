<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 72</title>
</head>
<body>
    
    <!-- Armazenar o nome do usuário com SESSION -->
    <?php

        // Sessão iniciada
        session_start();
        $_SESSION['usuario'] = "Vitoriano";

        // Para acessar a sessão
        echo $_SESSION["usuario"];

    ?>

</body>
</html>