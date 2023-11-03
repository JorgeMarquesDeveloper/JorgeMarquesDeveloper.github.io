<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opções</title>
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

        .btn-container {
            text-align: center;
        }

        .btn-option {
            display: block;
            width: 100%;
            margin: 10px;
            background-color: rgba(76, 175, 80, 0.6); /* Verde transparente */
            border: none;
            color: #fff; /* Cor do texto */
        }

        .btn-option:hover {
            background-color: rgba(76, 175, 80, 0.8); /* Cor mais escura no hover */
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
                        
                        <div class="btn-container">
                            <a class="btn btn-option" href="cadastrar.php">Cadastrar</a>
                            <a class="btn btn-option" href="relatorio.php">Gerar Relatório</a>
                            <a class="btn btn-option" href="pesquisar.php">Pesquisar Cadastrado</a>
                            <a class="btn btn-option" href="dashboard.php">DashBoard</a>
                            <a class="btn btn-option" href="index.php">Sair</a>
                        </div>
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
