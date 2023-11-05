<!DOCTYPE html>
<html>
<head>
    <title>Falha no requisição</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #0a6300, #d2b000);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
        }
        .login-container {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
        }
        .logo-container {
            text-align: center;
        }
        .logo {
            max-width: 70px;
        }
        .footer {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container login-container">
    <div class="col-md-4 login-box">
        <div class="logo-container">
            <img src="img/logo.png" alt="Logo" class="logo">
        </div>
        <h1 class="text-danger text-center">Falha na Solicitação</h1>
        <p>Sua solicitação de atualização de senha não é mais válida. Por favor, faça uma nova solicitação.</p>
        
        <div class="mt-2 text-center">
            <a href="esqueceu_senha.php" class="text-success">Nova Solicitação</a>
        </div>
    </div>
</div>
</div>
</body>
</html>