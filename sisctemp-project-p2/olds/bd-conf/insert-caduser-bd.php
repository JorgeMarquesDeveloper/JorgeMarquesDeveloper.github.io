<?php
// Conexão com o banco de dados (substitua pelas suas configurações)
include 'bd-conn.php';

// Coleta os dados do formulário
$nomeCompleto = $_POST['nomeCompleto'];
$cpf = $_POST['cpf'];
$identidadeOrgaoExp = $_POST['identidadeOrgaoExp'];
$sexo = $_POST['sexo'];
$nacionalidade = $_POST['nacionalidade'];
$estadoCivil = $_POST['estadoCivil'];
$filiacaoPai = $_POST['filiacaoPai'];
$filiacaoMae = $_POST['filiacaoMae'];
$dataNascimento = $_POST['dataNascimento'];
$numDependentes = $_POST['numDependentes'];
$nomeSocial = $_POST['nomeSocial'];
$cep = $_POST['cep'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$logradouro = $_POST['logradouro'];
$bairro = $_POST['bairro'];
$email = $_POST['email'];
$telefoneContato = $_POST['telefoneContato'];
$telefoneRecados = $_POST['telefoneRecados'];
$anosMilitar = $_POST['anosMilitar'];
$mesesMilitar = $_POST['mesesMilitar'];
$diasMilitar = $_POST['diasMilitar'];
$tempPassword = $cpf;

// Prepara a instrução SQL para a inserção
$sql = "INSERT INTO candidato (nomeCompleto, cpf, identidadeOrgaoExp, nacionalidade, sexo, estadoCivil, filiacaoPai, filiacaoMae, dataNascimento, numDependentes, nomeSocial, cep, estado, cidade, logradouro, bairro, email, telefoneContato, telefoneRecados, tempoServicoMilitar, anosMilitar, mesesMilitar, diasMilitar, senha)
VALUES (
    '$nomeCompleto', '$cpf', '$identidadeOrgaoExp', '$nacionalidade', '$sexo', '$estadoCivil', '$filiacaoPai', '$filiacaoMae', '$dataNascimento', '$numDependentes', '$nomeSocial', '$cep', '$estado', '$cidade', '$logradouro', '$bairro', '$email', '$telefoneContato', '$telefoneRecados', '0', '$anosMilitar', '$mesesMilitar', '$diasMilitar', '$tempPassword'
)";

// Executa a instrução SQL
if (mysqli_query($conn, $sql)) {
    include "../cad-pag/cadastro-candidato-true.php";
} else {
    echo "Erro ao executar o código: " . $sql . "<br>" . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
