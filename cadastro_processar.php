<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se um CPF foi fornecido
    if (isset($_POST["cpf"]) && !empty($_POST["cpf"])) {
        $cpf = $_POST["cpf"];
        
        // Conecte-se ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sisctemp_bd";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }

        // Consulta SQL para verificar se o CPF já existe
        $check_cpf_sql = "SELECT cpf FROM candidato WHERE cpf = '$cpf'";
        $check_result = $conn->query($check_cpf_sql);

        if ($check_result->num_rows > 0) {
            // O CPF já está cadastrado, redirecione para a página de erro
            header("Location: fail/cad_existente.php");
        } else {
            // O CPF não está cadastrado, continue com o processo de cadastro
            // Diretório de destino para o upload
            $upload_dir = 'uploads/';

            // Verifique se o campo "imagem" foi enviado corretamente
            if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
                // Tente mover o arquivo para o diretório de destino e renomeá-lo com base no CPF
                $image_name = $cpf . '.jpg'; // Altere a extensão conforme necessário
                $image_path = $upload_dir . $image_name;

                if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $image_path)) {
                    // Recupere os outros valores do formulário
                    $nomeCompleto = $conn->real_escape_string($_POST["nomeCompleto"]);
                    $identidadeOrgaoExp = $conn->real_escape_string($_POST["identidadeOrgaoExp"]);
                    $nacionalidade = $conn->real_escape_string($_POST["nacionalidade"]);
                    $sexo = $conn->real_escape_string($_POST["sexo"]);
                    $estadoCivil = $conn->real_escape_string($_POST["estadoCivil"]);
                    $filiacaoPai = $conn->real_escape_string($_POST["filiacaoPai"]);
                    $filiacaoMae = $conn->real_escape_string($_POST["filiacaoMae"]);
                    $dataNascimento = $conn->real_escape_string($_POST["dataNascimento"]);
                    $numDependentes = $conn->real_escape_string($_POST["numDependentes"]);
                    $nomeSocial = $conn->real_escape_string($_POST["nomeSocial"]);
                    $cep = $conn->real_escape_string($_POST["cep"]);
                    $estado = $conn->real_escape_string($_POST["estado"]);
                    $cidade = $conn->real_escape_string($_POST["cidade"]);
                    $logradouro = $conn->real_escape_string($_POST["logradouro"]);
                    $bairro = $conn->real_escape_string($_POST["bairro"]);
                    $email = $conn->real_escape_string($_POST["email"]);
                    $telefoneContato = $conn->real_escape_string($_POST["telefoneContato"]);
                    $telefoneRecados = $conn->real_escape_string($_POST["telefoneRecados"]);
                    $tempoServicoMilitar = $conn->real_escape_string($_POST["tempoServicoMilitar"]);
                    $anosMilitar = $conn->real_escape_string($_POST["anosMilitar"]);
                    $mesesMilitar = $conn->real_escape_string($_POST["mesesMilitar"]);
                    $diasMilitar = $conn->real_escape_string($_POST["diasMilitar"]);
                    $senha = $conn->real_escape_string($_POST["senha"]);

                    // Prepare a declaração SQL de inserção (incluindo o nome da imagem)
                    $sql = "INSERT INTO candidato (nomeCompleto, cpf, identidadeOrgaoExp, nacionalidade, sexo, estadoCivil, filiacaoPai, filiacaoMae, dataNascimento, numDependentes, nomeSocial, cep, estado, cidade, logradouro, bairro, email, telefoneContato, telefoneRecados, tempoServicoMilitar, anosMilitar, mesesMilitar, diasMilitar, senha)
                        VALUES ('$nomeCompleto', '$cpf', '$identidadeOrgaoExp', '$nacionalidade', '$sexo', '$estadoCivil', '$filiacaoPai', '$filiacaoMae', '$dataNascimento', '$numDependentes', '$nomeSocial', '$cep', '$estado', '$cidade', '$logradouro', '$bairro', '$email', '$telefoneContato', '$telefoneRecados', '$tempoServicoMilitar', '$anosMilitar', '$mesesMilitar', '$diasMilitar', '$senha')";

                    if ($conn->query($sql) === TRUE) {
                        // Redirecione para a página de sucesso
                        header("Location: true/cadastro_sucesso.php");
                    } else {
                        // Redirecione para a página de erro
                        header("Location: fail/cadastro.php");
                    }
                } else {
                    // Se o upload da imagem falhar, redirecione para a página de erro
                    header("Location: cadastro.php");
                }
            } else {
                // O campo "imagem" não foi enviado corretamente
                header("Location: cadastro.php");
            }
        }
    } else {
        echo "O CPF não foi fornecido.";
    }
} else {
    echo "Acesso inválido.";
}
?>