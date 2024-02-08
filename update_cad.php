<?php
require('bd_conect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Certifique-se de iniciar a sessão antes de acessar a variável de sessão
    session_start();

    // Recupera o ID do candidato da sessão
    $idCandidato = $_SESSION['usuario_id'];

    // Recupera os dados do formulário
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

    // Prepare a declaração SQL de atualização na tabela 'candidato'
    $sql_update = "UPDATE candidato SET
                    nomeCompleto = '$nomeCompleto',
                    identidadeOrgaoExp = '$identidadeOrgaoExp',
                    nacionalidade = '$nacionalidade',
                    sexo = '$sexo',
                    estadoCivil = '$estadoCivil',
                    filiacaoPai = '$filiacaoPai',
                    filiacaoMae = '$filiacaoMae',
                    dataNascimento = '$dataNascimento',
                    numDependentes = '$numDependentes',
                    nomeSocial = '$nomeSocial',
                    cep = '$cep',
                    estado = '$estado',
                    cidade = '$cidade',
                    logradouro = '$logradouro',
                    bairro = '$bairro',
                    email = '$email',
                    telefoneContato = '$telefoneContato',
                    telefoneRecados = '$telefoneRecados',
                    tempoServicoMilitar = '$tempoServicoMilitar',
                    anosMilitar = '$anosMilitar',
                    mesesMilitar = '$mesesMilitar',
                    diasMilitar = '$diasMilitar'
                    WHERE id = $idCandidato";

    // Execute a declaração SQL de atualização
    if ($conn->query($sql_update) === TRUE) {
        // Redirecione para a página de sucesso
        header("Location: system_editar_cad.php");
    } else {
        // Redirecione para a página de erro
        header("Location: fail/atualizacao.php");
    }
} else {
    echo "Acesso inválido.";
}
?>