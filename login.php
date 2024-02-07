<?php

require('bd_conect.php');

session_start(); // Inicia a sessão

// Verifica se o método da requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    // Verifica se os campos não estão em branco
    if (!empty($cpf) && !empty($senha)) {
        // Consulta SQL para verificar o login
        $sql = "SELECT * FROM usuarios WHERE cpf = ? AND senha = ?";

        // Prepara a declaração SQL
        $stmt = $conn->prepare($sql);

        // Verifica se a declaração preparada foi bem-sucedida
        if ($stmt) {
            // Vincula os parâmetros
            $stmt->bind_param("ss", $cpf, $senha);

            // Executa a consulta
            $stmt->execute();

            // Obtém o resultado
            $result = $stmt->get_result();

            // Verifica se encontrou um registro correspondente
            if ($result->num_rows == 1) {
                // Login bem-sucedido
                $row = $result->fetch_assoc();
                $tipo = $row["tipo_usuario"];

                // Define uma sessão como "logged_in"
                $_SESSION["logged_in"] = true;

                // Obtém o ID do usuário
                $idUsuario = $row["id"];

                // Guarda o ID na sessão para uso posterior
                $_SESSION["usuario_id"] = $idUsuario;

                // Verifica o tipo e redireciona para a página apropriada
                if ($tipo == "admin") {
                    header("Location: admin.php");
                    exit();
                } elseif ($tipo == "candidato") {
                    header("Location: system.php");
                    exit();
                } else {
                    // Tipo desconhecido
                    header("Location: fail/login.php");
                    exit();
                }
            } else {
                // Login falhou
                header("Location: fail/login.php"); // Redireciona para a página de falha
                exit();
            }
        } else {
            echo "Erro na declaração preparada: " . $conn->error;
        }

        // Fecha a declaração preparada
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>