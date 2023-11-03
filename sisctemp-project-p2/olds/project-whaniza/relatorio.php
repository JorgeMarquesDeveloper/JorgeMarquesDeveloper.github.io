<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir Dados e Gerar Planilha</title>
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
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <img src="logo.png" alt="Logo" width="150">
                </div>
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center">Pacientes Cadastrados</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ações</th> <!-- Coluna para botões de ação -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Aqui você deve buscar os dados do banco de dados e preencher a tabela
                                    // Exemplo de uso de PHP e MySQL para buscar dados:
                                    $conn = mysqli_connect("localhost", "root", "", "project001");
                                     $sql = "SELECT id, nome, idade, sexo, escolaridade, renda, procedencia, tempo_deslocamento, tipo_transporte, passagem_estadia_refeicao, cuidador, forca_motora FROM formulario";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            echo "<tr>";
                                            echo "<td>" . $row['id'] . "</td>";
                                            echo "<td>" . $row['nome'] . "</td>";
                                    
                                            // Botões de ação
                                            echo "<td>";
                                            echo "<a href='alterar.php?id=" . $row['id'] . "' class='btn btn-primary btn-sm'>Modificar</a>";
                                            echo "</br>";
                                            echo "</br>";
                                            echo "<a href='excluir.php?id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Excluir</a>";
                                            echo "</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<tr><td colspan='7'>Nenhum dado encontrado.</td></tr>";
                                    }

                                    mysqli_close($conn);
                                ?>
                            </tbody>
                        </table>
                        <form action="gerar-planilha.php" method="post">
                            <button type="submit" class="btn btn-success btn-block">Gerar Planilha</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
