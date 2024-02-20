<?php
require('db.php'); 

// Arquivo: contador_cadastros.php
// Inclui o código de conexão ao banco de dados

// Consulta SQL para contar os cadastros
$sql = "SELECT COUNT(*) as total_cadastros FROM ficha_01";

$resultado = $conn->query($sql);

if ($resultado) {
    // Obtém o resultado da contagem
    $dados = $resultado->fetch_assoc();
    $total_cadastros = $dados['total_cadastros'];
} else {
    $total_cadastros = "Erro na consulta: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>