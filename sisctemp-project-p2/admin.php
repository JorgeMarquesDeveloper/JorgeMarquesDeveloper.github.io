<!DOCTYPE html>
<html>

<head>
    <title>Painel de Administração</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #0a6300, #d2b000);
            background-size: cover;
            background-repeat: no-repeat;
            margin: 20px 0; /* Margem de 20px no topo e na parte inferior */
            height: calc(100vh - 40px); /* Altura ajustada à margem */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            width: 100%; /* Largura máxima de 100% */
            max-width: 1200px; /* Defina um valor máximo para o container se desejar */
        }

        .user-panel {
            text-align: center;
        }

        .logo {
            max-width: 70px;
        }

        .user-panel img {
            border-radius: 50%;
            max-width: 70px;
        }

        .user-panel .info {
            margin-top: 10px;
        }

        .main-sidebar {
            background-color: #f4f4f4;
            padding: 20px;
            border-radius: 5px;
        }

        .main-sidebar ul {
            list-style: none;
            padding: 0;
        }

        .main-sidebar ul li {
            margin: 10px 0;
        }

        .main-sidebar .input-group {
            margin: 10px 0;
        }

        .main-sidebar .btn-pesquisa {
            background-color: #007bff;
            color: #fff;
            border: none;
        }

        .content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            flex-basis: 30%;
            margin-right: 10px;
        }

        .card-title {
            font-size: 1.2em;
            font-weight: bold;
        }

        .card-text {
            color: #555;
        }
    </style>
</head>

<body>
    <div class="container">
        <aside class="main-sidebar">
            <div class="user-panel">
                <div class="pull-left">
                    <img height="50px"
                        src="fotos/158805_FT_b2c7526c44b57a18e8743f8bdd6200c94d50e3ef39e364b5f8813ce2fe71cba6.jpg"
                        alt="User Image">
                </div>
                <div class="pull-left info">
                    <p class="designation">3º Sgt</p>
                    <p><b>Marques</b></p>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li>
                    <form action="pesquisa_cpf.php" method="POST">
                        <div class="input-group" style="margin-left: 14px; margin-right: 8px;">
                            <input type="text" name="pesquisa" class="form-control" maxlength="25"
                                placeholder="Parte do CPF/Nome">
                            <input type="text" name="criptografia" hidden
                                value="9e229049c50ab711874b6a6a6411403c18054c94917d3ffb09de21cdbd1d3498">
                            <span class="input-group-btn">
                                <button class="btn btn-pesquisa">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </li>
                <li class="treeview"><a href="index.php"><i class="fa fa-home"></i><span>Página Inicial</span><i
                        class=""></i></a></li>
                <li class="treeview"><a href="foto_upload.php"><i class="fa fa-picture-o"></i><span>Minha Foto</span><i
                        class=""></i></a></li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-cogs"></i><span>Cadastros</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li hidden class="treeview">
                            <a href="medico_obrigatorio_cadastro.php">
                                <i class="fa fa-user-md"></i> Médico Obrigatório
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="documentacao_obrigatoria_visualiza.php">
                                <i class="fa fa-files-o"></i> Documentos Obrigatórios
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="curriculo_visualiza.php">
                                <i class="fa fa-file-text-o"></i> Currículo
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="especialidade_visualiza.php">
                                <i class="fa fa-wrench"></i> Especialidade
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="usuario_cadastro.php">
                                <i class="fa fa-user-plus"></i> Usuário
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#"><i class="fa fa-search"></i><span>Pesquisa</span><i class="fa fa-angle-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview">
                            <a href="candidato_lista.php">
                                <i class="fa fa-users"></i>
                                <span>Candidatos participando</span>
                            </a>
                        </li>
                        <li hidden class="treeview">
                            <a href="candidato_lista_eipot.php">
                                <i class="fa fa-users"></i>
                                <span>EIPOT</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="candidato_lista_desclassificados.php">
                                <i class="fa fa-user-times"></i>
                                <span>Candidatos desclassificados</span>
                            </a>
                        </li>
                        <li hidden class="treeview">
                            <a href="medicos_obrigatorios.php">
                                <i class="fa fa-user-md"></i>
                                <span>Médicos Obrigatórios</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="usuario_lista.php">
                                <i class="fa fa-user"></i> Usuário
                            </a>
                        </li>
                    </ul>
                </li>
                <li><a href="relatorios_lista.php"><i class="fa fa-file-text-o"></i><span>Relatórios</span></a></li>
                <li><a href="suporte_lista.php"><i class="fa fa-support"></i><span>Fale conosco</span></a></li>
                <li><a href="configuracao_selecao.php"><i class="fa fa-cogs"></i><span>Configuração da Seleção</span></a></li>
                <li><a href="etapa_passagem.php"><i class="fa fa-circle-o-notch"></i><span>Passagem de Etapa</span></a></li>
                <li><a href="auditoria.php"><i class="fa fa-eye"></i><span>Auditoria</span></a></li>
            </ul>
        </aside>
        <div class="col-md-9 p-4">
            <div class="row">
                <!-- Conteúdo aqui -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                            <p class="card-text">Conteúdo do Card 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                            <p class="card-text">Conteúdo do Card 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 3</h5>
                            <p class="card-text">Conteúdo do Card 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
