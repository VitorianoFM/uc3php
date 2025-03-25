<!-- Enviar nome pela URL e exibir no PHP -->

<?php
// Verifica se o parâmetro 'nome' foi enviado via URL
if (isset($_GET['nome'])) {
    $nome = $_GET['nome']; // Captura o valor do parâmetro 'nome'
    echo "Olá, " . htmlspecialchars($nome) . "!"; // Exibe a saudação
} else {
    echo "Por favor, insira um nome na URL.";
}
?>
