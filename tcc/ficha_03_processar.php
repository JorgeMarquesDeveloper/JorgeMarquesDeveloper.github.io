<?php
require('db.php'); 

// Função para limpar e validar os dados
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Processa o formulário quando é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Limpa e valida os dados
    $id = test_input($_POST["pacienteId"]);
    $dor = test_input($_POST["dor"]);
    $cansaco = test_input($_POST["cansaco"]);
    $sonolencia = test_input($_POST["sonolencia"]);
    $nausea = test_input($_POST["nausea"]);
    $faltaApetite = test_input($_POST["faltaApetite"]);
    $faltaAr = test_input($_POST["faltaAr"]);
    $depressao = test_input($_POST["depressao"]);
    $ansiedade = test_input($_POST["ansiedade"]);
    $bemEstar = test_input($_POST["bemEstar"]);
    $outroProblema = test_input($_POST["outroProblema"]);

    // SQL de inserção
    $sql = "INSERT INTO ficha_03 (id, dor, cansaco, sonolencia, nausea, falta_apetite, falta_ar, depressao, ansiedade, bem_estar, outro_problema) 
            VALUES ($id, $dor, $cansaco, $sonolencia, $nausea, $faltaApetite, $faltaAr, $depressao, $ansiedade, $bemEstar, '$outroProblema')";

if ($conn->query($sql) === TRUE) {
    header("Location: sucesso_cadastro.php");
    exit();
} else {
    header("Location: falha_cadastro.php");
    exit();
}

    // Fecha a conexão
    $conn->close();
}
?>
