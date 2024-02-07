<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota_id = $_POST['nota_id'];
    $area = $_POST['area'];

    $sql = "DELETE FROM notas WHERE id = $nota_id";

    if ($conn->query($sql) === TRUE) {
        // Redireciona de volta para a página correspondente à área
        header("Location: area_" . strtolower($area) . ".php");
    } else {
        echo "Erro ao excluir nota: " . $conn->error;
    }
}

$conn->close();
?>
