<?php

// Verifica se o formulário foi submetido
require("../bd_conect.php");


$candidato_id = $_SESSION['candidato_id'];


$guarnicao = $_POST['guarnicao'];
    $especialidade = $_POST['especialidade'];

    $stmt = $conn->prepare("INSERT INTO tab_cad_esp_doc_obg (id_sessao, guarnicao, especialidade) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $candidato_id, $guarnicao, $especialidade);

    if ($stmt->execute()) {
        $candidato_id = $stmt->insert_id;

        $upload_dir = "uploads/" . $candidato_id . "/";

        if (!file_exists($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        foreach ($_FILES as $key => $file) {
            $file_extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $new_filename = $key . '.' . $file_extension;
            $filename = $upload_dir . $new_filename;
            move_uploaded_file($file['tmp_name'], $filename);

            // Insere o link do arquivo no banco de dados
            $stmt = $conn->prepare("UPDATE tab_cad_esp_doc_obg SET $key = ? WHERE id = ?");
            $stmt->bind_param("si", $filename, $candidato_id);
            $stmt->execute();
        }

        header("Location: pagina_candidato.php?id=$candidato_id");
        exit();
    } else {
        echo "Erro ao cadastrar no banco de dados.";
    }

    $conn->close();


?>

