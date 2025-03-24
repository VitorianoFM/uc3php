<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    
    <?php

        // Sessão iniciada
        session_start();
        $_COOKIE['usuario'] = "Jorge";

        // Para acessar a sessão
        echo $_SESSION["usuario"];

        if(isset($_SESSION["usuario"])) {
            echo "Sim, a seção existe";
        } else {
            echo "Não, a seção não existe";
        }

        unset($_SESSION["usuario"]);

        if(isset($_SESSION["usuario"])) {
            echo "Sim, a sessão existe";
        } else {
            echo "Não, a sessão não existe";
        }

    ?>

</body>
</html>