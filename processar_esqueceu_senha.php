<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisctemp_bd";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

$cpf = $_POST['cpf'];
$nome_mae = $_POST['nome_mae'];
$data_nascimento = $_POST['data_nascimento'];

// Valide o CPF (exemplo de validação simples, você pode usar bibliotecas para validações mais robustas)

    // Consulte o banco de dados para encontrar o ID do usuário com base no CPF, nome da mãe e data de nascimento
    $sql = "SELECT id FROM candidato WHERE cpf = '$cpf' AND filiacaoMae = '$nome_mae' AND dataNascimento = '$data_nascimento'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // O usuário foi encontrado, então você pode obter o ID
        $row = $result->fetch_assoc();
        $usuario_id = $row['id'];

        // Armazene temporariamente o ID em uma variável de sessão
        session_start();
        $_SESSION['usuario_id'] = $usuario_id;

        // Redirecione para a página "nova_senha.php"
        header("Location: nova_senha.php");
    } else {
        // As informações não correspondem ao usuário no banco de dados
        header("Location: fail/reset_password.php");
    } 

$conn->close();

// Função para validar CPF (exemplo simples, considere usar bibliotecas para validações mais robustas)

?>
