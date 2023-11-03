<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pesquisa</title>
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
            margin-top: 20px;
        }

        .search-container {
            text-align: center;
        }

        .result-container {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container search-container">
        <h2 class="text-center">Pesquisar Cadastros</h2>
        <form id="search-form">
            <div class="form-group">
                <input type="text" class="form-control" id="termo" placeholder="Digite o termo de pesquisa" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Pesquisar</button>
        </form>
    </div>

    <div class="container result-container">
        <h2 class="text-center">Resultados da Pesquisa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Escolaridade</th>
                    <th>Renda</th>
                </tr>
            </thead>
            <tbody id="results">
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('search-form').addEventListener('submit', function (e) {
            e.preventDefault();
            var termo = document.getElementById('termo').value;

            // Fazer uma solicitação ao servidor para buscar os resultados do banco de dados
            $.post('buscar_dados.php', { termo: termo }, function (data) {
                var resultsContainer = document.getElementById('results');
                resultsContainer.innerHTML = '';

                if (data.length > 0) {
                    data.forEach(function (result) {
                        var row = document.createElement('tr');
                        row.innerHTML = '<td>' + result.id + '</td>' +
                            '<td>' + result.nome + '</td>' +
                            '<td>' + result.idade + '</td>' +
                            '<td>' + result.sexo + '</td>' +
                            '<td>' + result.escolaridade + '</td>' +
                            '<td>' + result.renda + '</td>';
                        resultsContainer.appendChild(row);
                    });

                    document.querySelector('.result-container').style.display = 'block';
                } else {
                    resultsContainer.innerHTML = "<tr><td colspan='6'>Nenhum resultado encontrado.</td></tr>";
                    document.querySelector('.result-container').style.display = 'block';
                }
            });
        });
    </script>
</body>
</html>
