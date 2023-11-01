
?>
<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisctemp_bd";

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recupere o CPF do formulário
    $cpf = $_POST["cpf"];

    // Verifique se o CPF já existe no banco de dados
    $check_sql = "SELECT cpf FROM candidato WHERE cpf = '$cpf'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        // CPF já existe, redirecione para uma página de erro
        header("Location: cadastro_falha_cpf.php");
    } else {
        // Recupere os outros valores do formulário
        $nomeCompleto = $_POST["nomeCompleto"];
        $cpf = $_POST["cpf"];
        $identidadeOrgaoExp = $_POST["identidadeOrgaoExp"];
        $nacionalidade = $_POST["nacionalidade"];
        $naturalidade = $_POST["naturalidade"];
        $sexo = $_POST["sexo"];
        $estadoCivil = $_POST["estadoCivil"];
        $filiacaoPai = $_POST["filiacaoPai"];
        $filiacaoMae = $_POST["filiacaoMae"];
        $dataNascimento = $_POST["dataNascimento"];
        $numDependentes = $_POST["numDependentes"];
        $nomeSocial = $_POST["nomeSocial"];
        $cep = $_POST["cep"];
        $estado = $_POST["estado"];
        $cidade = $_POST["cidade"];
        $logradouro = $_POST["logradouro"];
        $bairro = $_POST["bairro"];
        $email = $_POST["email"];
        $telefoneContato = $_POST["telefoneContato"];
        $telefoneRecados = $_POST["telefoneRecados"];
        $tempoServicoMilitar = $_POST["tempoServicoMilitar"];
        $anosMilitar = $_POST["anosMilitar"];
        $mesesMilitar = $_POST["mesesMilitar"];
        $diasMilitar = $_POST["diasMilitar"];
        $senha = $_POST["senha"];
    
        // ...

        // Prepare a declaração SQL de inserção
        $sql = "INSERT INTO candidato (nomeCompleto, cpf, identidadeOrgaoExp, nacionalidade, sexo, estadoCivil, filiacaoPai, filiacaoMae, dataNascimento, numDependentes, nomeSocial, cep, estado, cidade, logradouro, bairro, email, telefoneContato, telefoneRecados, tempoServicoMilitar, anosMilitar, mesesMilitar, diasMilitar, senha)
                VALUES ('$nomeCompleto', '$cpf', '$identidadeOrgaoExp', '$nacionalidade', '$sexo', '$estadoCivil', '$filiacaoPai', '$filiacaoMae', '$dataNascimento', '$numDependentes', '$nomeSocial', '$cep', '$estado', '$cidade', '$logradouro', '$bairro', '$email', '$telefoneContato', '$telefoneRecados', '$tempoServicoMilitar', '$anosMilitar', '$mesesMilitar', '$diasMilitar', '$senha')";

        // Execute a declaração SQL de inserção
        if ($conn->query($sql) === TRUE) {
            // Redirecione para a página de sucesso
            header("Location: cadastro_sucesso.php");
        } else {
            // Redirecione para a página de erro
            header("Location: cadastro_falha_cpf.php");
        }
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
