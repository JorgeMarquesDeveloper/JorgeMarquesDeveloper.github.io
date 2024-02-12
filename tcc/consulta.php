
<?php
require('db.php'); // Arquivo de conexão com o banco de dados
//require('tcpdf/tcpdf.php'); // Inclua o arquivo da biblioteca TCPDF

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_term = $_POST['search_term'];

    // Consulta ao banco de dados
    $query = "SELECT * FROM formulario WHERE nome LIKE '%$search_term%'";
    $result = $conn->query($query);

    // Exibir os resultados em uma tabela
    echo '<table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <!-- Adicione mais colunas conforme necessário -->
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td>' . $row['id'] . '</td>
                <td>' . $row['nome'] . '</td>
                <td>' . $row['idade'] . '</td>
                <!-- Adicione mais colunas conforme necessário -->
                <td>
                    <a href="gerar_pdf.php?id=' . $row['id'] . '" class="btn btn-primary">Gerar PDF</a>
                </td>
            </tr>';
    }

    echo '</tbody></table>';
}
?>
