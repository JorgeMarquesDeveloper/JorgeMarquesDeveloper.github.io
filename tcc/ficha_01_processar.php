<?php
// Verifique se o formulário foi enviado
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

    // SQL para inserir os dados no banco
    $sql = "INSERT INTO ficha_01 (nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora)
            VALUES ('$nome', '$idade', '$sexo', '$escolaridade', '$renda', '$procedencia', '$tempo_deslocamento', '$tipo_transporte', '$passagem_estadia_refeicao', '$cuidador', '$forca_motora')";

$sql_grafico_idade = "UPDATE grafic_idade_pess SET ";
if ($idade == "18-29") {
    $sql_grafico_idade .= "`18-29` = + 1";
} elseif ($idade == "30-49") {
    $sql_grafico_idade .= "`30-49` =  + 1";
} elseif ($idade == "50-59") {
    $sql_grafico_idade .= "`50-59` =  + 1";
} elseif ($idade == "60-79") {
    $sql_grafico_idade .= "`60-79` =  + 1";
} elseif ($idade == "80-mais") {
    $sql_grafico_idade .= "`80-mais` =  + 1";
}

// Executa as consultas
if ($conn->query($sql) === TRUE) {
    // Somente executa a atualização se a inserção na ficha_01 for bem-sucedida
    if ($conn->query($sql_grafico_idade) === TRUE) {
        header("Location: sucesso_cadastro.php");
        exit();
    } else {
        header("Location: falha_cadastro.php?error=" . urlencode($conn->error));
        exit();
    }
} else {
    header("Location: falha_cadastro.php?error=" . urlencode($conn->error));
    exit();
}
    $conn->close();

?>