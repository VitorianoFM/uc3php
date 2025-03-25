<!-- Login simples com POST -->

<?php

if (isset($_GET['numero'])) {
    $numero = intval($_GET['numero']); 

    if ($numero != 0 || $_GET['numero'] === '0') {
        $numeroDobro = $numero * 2; 
        echo "O dobro de $numero é: $numeroDobro <br>";
    } else {
        echo "Por favor, insira um número válido.";
    }
} else {
    echo "Por favor, insira um número no campo abaixo.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Dobro</title>
</head>
<body>
    <form method="get" action="">
        <label>Número:</label>
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Calcular Dobro</button>
    </form>
</body>
</html>