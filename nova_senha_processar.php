<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: reset_senha_fail.php");
    exit;
}

$usuario_id = $_SESSION['usuario_id'];
unset($_SESSION['usuario_id']); // Limpa o ID da sessão, pois não é mais necessário

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisctemp_bd";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$nova_senha = $_POST['nova_senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Valide se as senhas coincidem
if ($nova_senha === $confirmar_senha) {
    // As senhas coincidem, você também pode adicionar outras validações de senha aqui

    // Atualize a senha do usuário no banco de dados usando $usuario_id
    $hashed_password = $nova_senha;
    $sql = "UPDATE candidato SET senha = '$hashed_password' WHERE id = $usuario_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: cadastro_sucesso.php");
    } else {
        echo "Erro ao atualizar a senha: " . $conn->error;
    }
} else {
    echo "As senhas não coincidem. Tente novamente.";
}

$conn->close();
?>