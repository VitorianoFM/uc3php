<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 77</title>
</head>
<body>
    
    <!-- Excluir um COOKIE -->
    <?php

        // Sessão iniciada
        session_start();
        $_SESSION['usuario'] = "João";

        // Para acessar a sessão
        echo $_SESSION["usuario"];

        if(isset($_SESSION["usuario"])) {
            echo "\nSim, a seção existe";
        } else {
            echo "\nNão, a seção não existe";
        }

        unset($_SESSION["usuario"]);

        if(isset($_SESSION["usuario"])) {
            echo "\nSim, a sessão existe";
        } else {
            echo "\nNão, a sessão não existe";
        }

    ?>

</body>
</html>