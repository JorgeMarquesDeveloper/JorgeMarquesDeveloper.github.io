<?php
require('db.php'); 

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

// SQL para verificar se o paciente já existe
$checkDuplicateSql = "SELECT * FROM ficha_01 WHERE nome = '$nome' AND idade = '$idade' OR sexo = '$sexo'";
$result = $conn->query($checkDuplicateSql);

if ($result->num_rows > 0) {
    // Paciente já cadastrado
    header("Location: falha_cadastro.php");
    exit();
}

// Paciente não existe, então insira no banco de dados
$sql = "INSERT INTO ficha_01 (nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora)
        VALUES ('$nome', '$idade', '$sexo', '$escolaridade', '$renda', '$procedencia', '$tempo_deslocamento', '$tipo_transporte', '$passagem_estadia_refeicao', '$cuidador', '$forca_motora')";

if ($conn->query($sql) === TRUE) {
    header("Location: sucesso_cadastro.php");
    exit();
} else {
    header("Location: falha_cadastro.php");
    exit();
}

$conn->close();


?>