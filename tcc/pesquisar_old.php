<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibição e Geração de PDF</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to bottom, #4CAF50, #FFFFFF);
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="pesquisar.php" method="POST">
            <div class="form-group">
                <label for="search_term">Digite o nome para buscar:</label>
                <input type="text" class="form-control" id="search_term" name="search_term" required>
            </div>
            <button type="submit" class="btn btn-success">Buscar</button>
        </form>

        <!-- Área para exibir os resultados -->
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            require('db.php'); // Arquivo de conexão com o banco de dados

            $search_term = $_POST['search_term'];

            // Consulta ao banco de dados
            $query = "SELECT * FROM formulario WHERE nome LIKE '%$search_term%'";
            $result = $conn->query($query);

            // Exibir os resultados em uma tabela
            if ($result->num_rows > 0) {
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
            } else {
                echo '<p>Nenhum resultado encontrado.</p>';
            }
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
