<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 74</title>
</head>
<body>
    
    <!-- Contador de visitas com SESSION e COOKIE -->
    <?php

        // Sessão iniciada
        session_start();

        if (!isset($_SESSION['contador'])) {
            $_SESSION['contador'] = 0;
        }

        $_SESSION['contador']++;

        echo "Você visitou essa página " . $_SESSION['contador'] . " vezes";

    ?>

</body>
</html>