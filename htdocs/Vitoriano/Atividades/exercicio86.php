<!-- Calcular média de duas notas com POST -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 86 - Calculadora de Média</title>
</head>
<body>
    <h1>Calculadora de Média</h1>
    <form method="POST" action="">
        <label for="nota1">Nota 1:</label>
        <input type="number" step="0.01" name="nota1" id="nota1" required>
        <br>
        <label for="nota2">Nota 2:</label>
        <input type="number" step="0.01" name="nota2" id="nota2" required>
        <br>
        <button type="submit">Calcular Média</button>
    </form>
</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nota1 = $_POST['nota1'];
        $nota2 = $_POST['nota2'];

        $media = ($nota1 + $nota2) / 2;

        echo "<h2>A média das notas é: " . number_format($media, 2) . "</h2>";
    }
?>