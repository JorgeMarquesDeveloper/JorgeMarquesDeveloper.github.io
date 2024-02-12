
<?php
// Conectar ao banco de dados (substitua pelos seus dados)
require('db.php'); 

// Verificar a conexão


// Processar dados do formulário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Seção 1: Informações Gerais
    $id_paciente = $_POST["pacienteId"];
    $data_ultima_consulta = $_POST["data_ultima_consulta"];
    $kps_ultima_consulta = $_POST["kps_ultima_consulta"];
    $kps_telefonico = $_POST["kps_telefonico"];
    $alteracao_significativa = isset($_POST["alteracao_significativa"]) ? $_POST["alteracao_significativa"] : "Não";
    $alteracao_significativa_descricao = isset($_POST["alteracao_significativa_descricao"]) ? $_POST["alteracao_significativa_descricao"] : "";
    $esteve_spa = $_POST["esteve_spa"];
    $esteve_spa_motivo = isset($_POST["esteve_spa_motivo"]) ? $_POST["esteve_spa_motivo"] : "";
    $esteve_internado = $_POST["esteve_internado"];
    $esteve_internado_motivo = isset($_POST["esteve_internado_motivo"]) ? $_POST["esteve_internado_motivo"] : "";

    // Seção 2: Sintomas
    $dor = $_POST["dor"];
    $dispneia = $_POST["dispneia"];
    $sonolencia = $_POST["sonolencia"];
    $nauseas = $_POST["nauseas"];
    $confusao_mental = $_POST["confusao_mental"];
    $vomito = $_POST["vomito"];
    // Adicione mais campos de sintomas conforme necessário

    // Seção 3: Observações
    $observacoes = isset($_POST["observacoes"]) ? $_POST["observacoes"] : "";

    // Seção 4: Função Vesicointestinal
    $diurese = isset($_POST["diurese"]) ? $_POST["diurese"] : "";
    $evacuacao = isset($_POST["evacuacao"]) ? $_POST["evacuacao"] : "";
    $ferida = $_POST["ferida"];
    $local_ferida = isset($_POST["local_ferida"]) ? $_POST["local_ferida"] : "";
    $sangramento = $_POST["sangramento"];
    $local_sangramento = isset($_POST["local_sangramento"]) ? $_POST["local_sangramento"] : "";
    $febre_respiratoria = $_POST["febre_respiratoria"];

    // Seção 5: Conduta/Orientação
    $contato_realizado_com = $_POST["contato_realizado_com"];
    $conduta_estavel = isset($_POST["conduta_estavel"]) ? $_POST["conduta_estavel"] : "";
    $conduta_estavel_material_acabando = isset($_POST["conduta_estavel_material_acabando"]) ? $_POST["conduta_estavel_material_acabando"] : "";
    $conduta_sintomas_descontrolados = isset($_POST["conduta_sintomas_descontrolados"]) ? $_POST["conduta_sintomas_descontrolados"] : "";
    $conduta_necessidade_avaliacao_presencial = isset($_POST["conduta_necessidade_avaliacao_presencial"]) ? $_POST["conduta_necessidade_avaliacao_presencial"] : "";

    // Inserir dados na tabela SQL
    $sql = "INSERT INTO ficha_teleatendimento 
            (id,data_ultima_consulta, kps_ultima_consulta, kps_telefonico, alteracao_significativa, 
            alteracao_significativa_descricao, esteve_spa, esteve_spa_motivo, esteve_internado, 
            esteve_internado_motivo, dor, dispneia, sonolencia, nauseas, confusao_mental, vomito, 
            observacoes, diurese, evacuacao, ferida, local_ferida, sangramento, local_sangramento, 
            febre_respiratoria, contato_realizado_com, conduta_estavel, conduta_estavel_material_acabando, 
            conduta_sintomas_descontrolados, conduta_necessidade_avaliacao_presencial)
            VALUES 
            ('$id_paciente','$data_ultima_consulta', '$kps_ultima_consulta', '$kps_telefonico', '$alteracao_significativa', 
            '$alteracao_significativa_descricao', '$esteve_spa', '$esteve_spa_motivo', '$esteve_internado', 
            '$esteve_internado_motivo', '$dor', '$dispneia', '$sonolencia', '$nauseas', '$confusao_mental', 
            '$vomito', '$observacoes', '$diurese', '$evacuacao', '$ferida', '$local_ferida', '$sangramento', 
            '$local_sangramento', '$febre_respiratoria', '$contato_realizado_com', '$conduta_estavel', 
            '$conduta_estavel_material_acabando', '$conduta_sintomas_descontrolados', 
            '$conduta_necessidade_avaliacao_presencial')";

if ($conn->query($sql) === TRUE) {
    header("Location: sucesso_cadastro.php");
    exit();
} else {
    header("Location: falha_cadastro.php?error=" . urlencode($conn->error));
    exit();
}

    // Fechar a conexão com o banco de dados
    $conn->close();
}
?>
