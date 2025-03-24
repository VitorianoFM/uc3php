<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 76</title>
</head>
<body>
    
    <!-- Contandor de visitas usando COOKIE -->
    <?php

    $cookie = "contador_visitas";

    if (isset($_COOKIE[$cookie])) {
        $contador_visitas = $_COOKIE[$cookie] + 1;
    } else {
        $contador_visitas = 1;
    }

    setcookie($cookie, $contador_visitas, time() + 365 * 24 * 60 * 60,"/");

    echo "Você visitou essa página " . $contador_visitas . " vezes";

    ?>

</body>
</html>