<!DOCTYPE html>
<html>
<head>
    <title>Nova Senha - SisCTemp</title>
    <link rel="icon" type="image/png" href="img/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.min.js"></script>
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
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: ; /* Centralizar conteúdo do login-box */
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
        </br>
        <h1 class="text-center" style="color: #094c00;">Nova Senha</h1>
        <form action="nova_senha_processar.php" method="post">
            <div class="form-group">
                <label for="nova_senha">Nova Senha:</label>
                <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
            </div>
            <div class="form-group">
                <label for="confirmar_senha">Confirmar Senha:</label>
                <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
            </div>
            <button type="submit" class="btn btn-block" style="background-color: #094c00; color:white;">Redefinir Senha</button>
        </form>
    </div>
</div>
<script>
    // Você pode adicionar qualquer script JavaScript necessário aqui
</script>
</body>
</html>
