<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Start Bootstrap</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="msapplication-TileColor" content="#dd3d31">
    <meta name="theme-color" content="#dd3d31">
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- Preload in script-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(to right, #26a800, #000000);
        }
        .container-fluid {
            background-color: transparent;
            padding: 0;
        }
        .col-md-3 {
            background-color: #000000; /* Alterado para preto */
            color: #fff;
            min-height: 100vh;
            padding: 0;
        }
        .col-md-9 {
            padding: 20px;
        }
        .col-md-9 h1 {
            color: #dc392d;
        }
        .nav-link {
            color: #000000; /* Alterado para preto */
            text-align: center; /* Centraliza o texto */
        }
        .nav-link.active {
            background-color: #26a800;
        }
        .btn-dark {
            background-color: #000000; /* Alterado para preto */
            color: #fff;
            border: none;
            position: absolute;
            top: 10px;
            left: 10px;
        }
        .btn-dark i {
            font-size: 1.5rem;
        }
        .content-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 10px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-success sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="admin.html"> <!-- Adicionado link para a página 'admin.html' -->
                                <i class="bi bi-person-fill"></i> Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.html"> <!-- Adicionado link para a página 'cadastrar.html' -->
                                <i class="bi bi-person-plus-fill"></i> Cadastrar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="editar.html"> <!-- Adicionado link para a página 'editar.html' -->
                                <i class="bi bi-pencil-fill"></i> Editar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="relatorio.html"> <!-- Adicionado link para a página 'relatorio.html' -->
                                <i class="bi bi-file-earmark-text-fill"></i> Gerar Relatório
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html"> <!-- Adicionado link para a página 'dashboard.html' -->
                                <i class="bi bi-bar-chart-fill"></i> Gerar Dashboard
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <button class="btn btn-dark d-md-none" id="menuToggle">
                    <i class="bi bi-chevron-double-left"></i>
                </button>
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2 text-light">Painel de Controle - Admin</h1>
                </div>
                <!-- Conteúdo da página protegida -->
                <div class="content-card">
                    <h2>Relatório Mensal</h2>
                    <!-- Adicione aqui os elementos do relatório -->
                </div>
                <div class="content-card">
                    <h2>Gráficos</h2>
                    <!-- Adicione aqui os gráficos ou outros elementos visuais -->
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css"></script>
    <script>
        document.getElementById('menuToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('d-md-block');
        });
    </script>
</body>
</html>
