<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisctemp_bd";


// Conecte-se ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifique se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];

    // Verifique se os campos não estão em branco
    if (!empty($cpf) && !empty($senha)) {
        // Consulta SQL para verificar o login
        $sql = "SELECT * FROM candidato WHERE cpf = ? AND senha = ?";
        
        // Prepare a declaração SQL
        $stmt = $conn->prepare($sql);

        // Verifique se a declaração preparada foi bem-sucedida
        if ($stmt) {
            // Vincule os parâmetros
            $stmt->bind_param("ss", $cpf, $senha);

            // Execute a consulta
            $stmt->execute();

            // Obtenha o resultado
            $result = $stmt->get_result();

            // Verifique se encontrou um registro correspondente
            if ($result->num_rows == 1) {
                // Login bem-sucedido
                session_start();
                $_SESSION["logged_in"] = true;
                header("Location: cadastro_sucesso.php"); // Redireciona para a página de sucesso
                exit();
            } else {
                // Login falhou
                header("Location: cadastro_falha.php"); // Redireciona para a página de falha
                exit();
            }
        } else {
            echo "Erro na declaração preparada: " . $conn->error;
        }

        // Feche a declaração preparada
        $stmt->close();
    } else {
        echo "Por favor, preencha todos os campos.";
    }
}

// Feche a conexão com o banco de dados
$conn->close();
?>
