<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Exportar Dados para XLSX</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Exportar Dados para XLSX</h1>

        <div class="table-responsive mt-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Sexo</th>
                        <th>Escolaridade</th>
                        <th>Renda</th>
                        <th>Procedência</th>
                        <th>Tempo de Deslocamento</th>
                        <th>Tipo de Transporte</th>
                        <th>Passagem/Estadia/Refeição</th>
                        <th>Cuidador</th>
                        <th>Força Motora</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Conexão com o banco de dados
                    $hostname = 'localhost';
                    $username = 'root';
                    $password = '';
                    $database = 'project001';

                    $connection = new mysqli($hostname, $username, $password, $database);

                    if ($connection->connect_error) {
                        die('Erro na conexão com o banco de dados: ' . $connection->connect_error);
                    }

                    // Consulta SQL para selecionar os dados da tabela
                    $query = "SELECT nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora FROM formulario";

                    $result = $connection->query($query);

                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['nome'] . '</td>';
                        echo '<td>' . $row['idade'] . '</td>';
                        echo '<td>' . $row['sexo'] . '</td>';
                        echo '<td>' . $row['escolaridade'] . '</td>';
                        echo '<td>' . $row['renda'] . '</td>';
                        echo '<td>' . $row['procedencia'] . '</td>';
                        echo '<td>' . $row['tempo_deslocamento'] . '</td>';
                        echo '<td>' . $row['tipo_transporte'] . '</td>';
                        echo '<td>' . $row['passagem_estadia_refeicao'] . '</td>';
                        echo '<td>' . $row['cuidador'] . '</td>';
                        echo '<td>' . $row['forca_motora'] . '</td>';
                        echo '</tr>';
                    }

                    $connection->close();
                    ?>
                </tbody>
            </table>
        </div>

        <a class="btn btn-primary" href="gerar_relatorio.php">Exportar para XLSX</a>
    </div>
</body>
</html>