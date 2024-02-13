<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conecte ao banco de dados (substitua com suas próprias credenciais)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project001";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }

    // Recupere os valores do formulário
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];
    $escolaridade = $_POST["escolaridade"];
    $renda = $_POST["renda"];
    $procedencia = $_POST["procedencia"];
    $tempo_deslocamento = $_POST["tempo-deslocamento"];
    $tipo_transporte = $_POST["tipo-transporte"];
    $passagem_estadia_refeicao = $_POST["passagem-estadia-refeicao"];
    $cuidador = $_POST["cuidador"];
    $forca_motora = $_POST["forca-motora"];

    // SQL para inserir os dados no banco
    $sql = "INSERT INTO ficha_01 (nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora)
            VALUES ('$nome', '$idade', '$sexo', '$escolaridade', '$renda', '$procedencia', '$tempo_deslocamento', '$tipo_transporte', '$passagem_estadia_refeicao', '$cuidador', '$forca_motora')";

if ($conn->query($sql) === TRUE) {
    header("Location: sucesso_cadastro.php");
    exit();
} else {
    header("Location: falha_cadastro.php?error=" . urlencode($conn->error));
    exit();
}

    $conn->close();
}
?>