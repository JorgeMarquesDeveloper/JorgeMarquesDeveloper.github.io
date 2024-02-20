<?php
require('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    // Verifica se o ID é numérico
    if (!is_numeric($id)) {
        echo "ID inválido.";
        exit;
    }

    // Inicia a transação
    $conn->begin_transaction();

    try {
        // Query para excluir os dados da ficha_01 com o ID especificado
        $sql_ficha_01 = "DELETE FROM ficha_01 WHERE id = $id";
        $conn->query($sql_ficha_01);

        // Query para excluir os dados da ficha_teleatendimento com o ID especificado
        $sql_ficha_teleatendimento = "DELETE FROM ficha_teleatendimento WHERE id = $id";
        $conn->query($sql_ficha_teleatendimento);

        // Query para excluir os dados da ficha_03 com o ID especificado
        $sql_ficha_03 = "DELETE FROM ficha_03 WHERE id = $id";
        $conn->query($sql_ficha_03);

        // Query para excluir os dados da ficha_04 com o ID especificado
        $sql_ficha_04 = "DELETE FROM ficha_04 WHERE id = $id";
        $conn->query($sql_ficha_04);

        // Commit se todas as consultas foram bem-sucedidas
        $conn->commit();

        header("Location: pesquisar.php");
    } catch (Exception $e) {
        // Rollback em caso de erro
        $conn->rollback();
        echo "Erro ao excluir dados de todas as fichas: " . $e->getMessage();
    }
} else {
    echo "ID não fornecido.";
}

$conn->close();
?>
