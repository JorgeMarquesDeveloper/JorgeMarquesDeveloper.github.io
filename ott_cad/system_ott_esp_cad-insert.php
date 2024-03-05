<?php



    require('../bd_conect.php');
    session_start();

    if (!isset($_SESSION['usuario_id'])) {
        header("Location: ../index.php");
        exit();
    }

    //if ($_SESSION["tipo"] !== "candidato") {
    //   header("Location: fail/access_denied.php");
    //   exit();
    //}
    
    // Verifique se a variável de última atividade está definida
    if (isset($_SESSION["last_activity"])) {
        $inactive_time = 300; // Tempo de inatividade em segundos (60 segundos = 1 minuto)
    
        // Verifique se o tempo de inatividade excedeu o limite
        if (time() - $_SESSION["last_activity"] > $inactive_time) {
            // Encerre a sessão
            session_unset();
            session_destroy();
            header("Location: index.php"); // Redirecione para a tela de login
            exit();
        }
    }

    // Atualize o último momento de atividade
    $_SESSION["last_activity"] = time();

    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if (isset($_SESSION["usuario_id"])) {
            $idCandidato = $_SESSION["usuario_id"];

            // Conecte-se ao banco de dados (substitua com suas configurações de conexão)
    
            // Consulta SQL para obter o nome do candidato com base no ID
            $sql = "SELECT nome, cpf FROM usuarios WHERE id = $idCandidato";

            $result = $conn->query($sql);

            if ($result->num_rows == 1) {
                $row = $result->fetch_assoc();
                $nomeCandidato = $row["nome"];
                $cpf = $row["cpf"];
            }

        
        }
    }
    
// Inicie ou retome a sessão


// Verifica se o formulário foi submetido


// Obtém o ID do candidato da sessão


$guarnicao = $_POST['guarnicao'];
$especialidade = $_POST['especialidade'];

// Verificar se já existe um registro para o usuário na tabela
$check_query = $conn->prepare("SELECT id_cad FROM tab_cad_esp_doc_obg WHERE id_cad = ?");
$check_query->bind_param("i", $idCandidato);
$check_query->execute();
$check_result = $check_query->get_result();

if ($check_result->num_rows > 0) {
    // Se já existe, atualize os dados
    $stmt = $conn->prepare("UPDATE tab_cad_esp_doc_obg SET guarnicao = ?, especialidade = ? WHERE id_cad = ?");
    $stmt->bind_param("ssi", $guarnicao, $especialidade, $idCandidato);
} else {
    // Se não existe, insira um novo registro
    $stmt = $conn->prepare("INSERT INTO tab_cad_esp_doc_obg (id_cad, guarnicao, especialidade) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $idCandidato, $guarnicao, $especialidade);
}

if ($stmt->execute()) {
    $upload_dir = "uploads/" . $idCandidato . "/doc_obg/";
    if (!file_exists($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }

    foreach ($_FILES as $key => $file) {
        $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);

        $new_filename = $key . '.' . $file_extension;
        $filename = $upload_dir . $new_filename;
        move_uploaded_file($file['tmp_name'], $filename);
        $link = "uploads/" . $idCandidato . "/" . $new_filename;

        // Insere o link do arquivo no banco de dados
        $stmt_update = $conn->prepare("UPDATE tab_cad_esp_doc_obg SET $key = ? WHERE id_cad = ?");
        $stmt_update->bind_param("si", $link, $idCandidato);
        $stmt_update->execute();
        $stmt_update->close();
    }

    header("Location: system_ott_cad_exp_prof.php");
    exit();
} else {
    echo "Erro ao cadastrar no banco de dados: " . $stmt->error;
}

$check_query->close();
$stmt->close();
$conn->close();
?>





