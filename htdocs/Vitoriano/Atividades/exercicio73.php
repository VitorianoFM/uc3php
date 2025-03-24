<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 73</title>
</head>
<body>
    
    <!-- Verificar se a sessão existe usando SESSION e COOKIE -->
    <?php

        // Sessão iniciada
        session_start();

        if (isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])) {
            echo "Sim, a sessão existe";
        } else {
            echo "Não, a sessão não existe";
        }

    ?>

</body>
</html>