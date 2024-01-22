<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se o CPF, senha e tipo foram fornecidos
    if (isset($_POST["cpf"]) && isset($_POST["senha"])) {
        $cpf = $_POST["cpf"];
        $senha = $_POST["senha"];

        // Conecte-se ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sisctemp_bd";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta SQL para verificar o CPF, senha e tipo na tabela 'usuarios'
        $login_query = "SELECT tipo FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
        $result = $conn->query($login_query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $tipo = $row["tipo"];

            // Verifique se o tipo é 'admin'
            if ($tipo == "admin") {
                $_SESSION["logged_in"] = true;
                $_SESSION["admin"] = true;
                header("Location: admin.php");
                exit();
            } else {
                // Tipo não é 'admin', redirecione para a página de erro
                header("Location: fail/login.php");
                exit();
            }
        } else {
            // Credenciais inválidas, redirecione para a página de erro
            header("Location: fail/login.php");
            exit();
        }
    } else {
        // Dados não fornecidos, redirecione para a página de erro
        header("Location: fail/login.php");
        exit();
    }
} else {
    // Acesso inválido, redirecione para a página de erro
    header("Location: fail/login.php");
    exit();
}
?>
