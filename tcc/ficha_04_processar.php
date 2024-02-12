<?php
require('db.php'); 

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados (substitua as informações conforme necessário)


    // Recupera os dados do formulário
    $id_usuario = $_POST["pacienteId"];
    $iniciais = $_POST["iniciais"];
    $data_nascimento = $_POST["data_nascimento"];
    $data_hoje = $_POST["data_hoje"];

    // Prepara as perguntas
    $perguntas = array();
    for ($i = 1; $i <= 13; $i++) {
        $pergunta = $_POST["pergunta" . $i];
        $perguntas[] = $pergunta;
    }

    // Insere os dados no banco de dados
    $sql = "INSERT INTO ficha_04 (id, iniciais, data_nascimento, data_hoje, pergunta1, pergunta2, pergunta3, pergunta4, pergunta5, pergunta6, pergunta7, pergunta8, pergunta9, pergunta10, pergunta11, pergunta12, pergunta13)
    VALUES ('$id_usuario', '$iniciais', '$data_nascimento', '$data_hoje', '" . implode("','", $perguntas) . "')";

    if ($conn->query($sql) === TRUE) {
        header("Location: sucesso_cadastro.php");
        exit();
    } else {
        header("Location: falha_cadastro.php");
        exit();
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
} else {
    // Redireciona se o formulário não foi enviado corretamente
    header("Location: index.php");
    exit();
}
?>

