<?php
require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = mysqli_real_escape_string($conn, $_GET["id"]);

    // Verifica se o ID é numérico
    if (!is_numeric($id)) {
        echo "ID inválido.";
        exit;
    }

    // Query para excluir os dados da lista com o ID especificado
    $sql = "DELETE FROM ficha_teleatendimento WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: pesquisar.php");
    } else {
        echo "Erro ao excluir dados da lista: " . $conn->error;
    }
} else {
    echo "ID não fornecido.";
}

$conn->close();
?>