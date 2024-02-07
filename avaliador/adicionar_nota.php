<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $area = $_POST['area'];
    $tipo = $_POST['tipo-anotacao'];
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['nova-nota'];
    

    $sql = "INSERT INTO notas (area, conteudo,titulo,tipo) VALUES ('$area', '$conteudo','$titulo','$tipo')";

    if ($conn->query($sql) === TRUE) {
        // Armazena a URL da página originária na variável de sessão
        session_start();
        $_SESSION['previous_page'] = $_SERVER['HTTP_REFERER'];

        header("Location: " . $_SESSION['previous_page']); // Redireciona de volta à página originária
    } else {
        echo "Erro ao adicionar nota: " . $conn->error;
    }
}

$conn->close();
?>
