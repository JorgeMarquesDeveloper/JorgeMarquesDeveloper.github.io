<!DOCTYPE html>
<html>
<head>
    <title>Esqueci a Senha - SisCTemp</title>
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
            padding: 20px;
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
        <h2 class="text-center" style="color: #094c00;">Esqueci a Senha</h2>
        <form action="processar_esqueceu_senha.php" method="post">
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control cpf-mask" id="cpf" name="cpf" required>
            </div>
            <div class="form-group">
                <label for="nome_mae">Nome da Mãe:</label>
                <input type="text" class="form-control" id="nome_mae" name="nome_mae" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
            </div>
            <button type="submit" class="btn btn-block" style="background-color: #094c00; color:white;">Verificar</button>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.cpf-mask').inputmask('999.999.999-99');
    });
</script>
</body>
</html>
