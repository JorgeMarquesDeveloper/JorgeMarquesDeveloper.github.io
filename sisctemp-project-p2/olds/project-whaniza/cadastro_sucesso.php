<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Realizado com Sucesso</title>
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

        .alert {
            margin-top: 20px;
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
                        <h2 class="text-center text-success">Sucesso</h2>
                        <div class="alert alert-success" role="alert">
                            Seu cadastro foi concluído com sucesso..
                        </div>
                        <div class="text-center">
                            <a href="cadastrar.php" class="btn btn-primary">Realizar novo Cadastro</a>
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
