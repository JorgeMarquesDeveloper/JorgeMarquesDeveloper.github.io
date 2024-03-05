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
// Verifica se o formulário foi submetido
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   // Obtém os dados do formulário
   $nomeCurso = $_POST["nomeCurso"];
   $cargaHoraria = $_POST["cargaHoraria"];
   $dataConclusao = $_POST["dataConclusao"];
   $docAnexo = $_FILES["docAnexo"];

   // Conecta-se ao banco de dados (substitua com suas configurações de conexão)
   // ...

   // Verifica se já existe uma pasta para o usuário, senão, cria
   $upload_dir = "uploads/" . $_SESSION["usuario_id"] . "/cursos_complementares_anxr/";
   if (!file_exists($upload_dir)) {
       mkdir($upload_dir, 0777, true);
   }

   // Move o documento anexo para a pasta do usuário
   $file_extension = pathinfo($docAnexo['name'], PATHINFO_EXTENSION);
   $new_filename = "anexo." . $file_extension;
   $filename = $upload_dir . $new_filename;
   move_uploaded_file($docAnexo['tmp_name'], $filename);
   $link_anexo = $upload_dir . $new_filename;

   // Insere os dados na tabela
   $stmt = $conn->prepare("INSERT INTO cursos_complementares_ott (nomeCurso, cargaHoraria, dataConclusao, docAnexo) VALUES (?, ?, ?, ?)");
   $stmt->bind_param("siss", $nomeCurso, $cargaHoraria, $dataConclusao, $link_anexo);

   if ($stmt->execute()) {
       header("Location: pagina_sucesso.php"); // Redirecionar para a página de sucesso
       exit();
   } else {
       echo "Erro ao cadastrar no banco de dados: " . $stmt->error;
   }

   $stmt->close();
   $conn->close();
}
?>





