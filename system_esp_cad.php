<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SisCTemp</title>
      <link rel="icon" type="image/png" href="img/favicon.ico">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <style>
         /* Adicione outras regras de estilo conforme necessário */
         img {
         max-width: 100%;
         height: auto;
         }
         body {
         overflow-x: hidden;
         }
      </style>
   </head>
   <body id= "page-top">
      <?php
         session_start();
         
         require('bd_conect.php');
         
         // Atualize o último momento de atividade na sessão
         $_SESSION["last_activity"] = time();
         
         if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
             if (isset($_SESSION["usuario_id"])) {
                 $idCandidato = $_SESSION["usuario_id"];
         
                 // Consulta SQL para obter dados do candidato (usuários + candidatos) com base no ID
                 $sql = "SELECT u.nome AS nomeUsuario, u.cpf AS cpfUsuario, c.* 
                         FROM usuarios u
                         LEFT JOIN candidato c ON u.id = c.id
                         WHERE u.id = $idCandidato";
         
                 $result = $conn->query($sql);
         
                 if ($result->num_rows == 1) {
                     $row = $result->fetch_assoc();
                     $nomeCandidato = $row["nomeUsuario"];
                     $cpf = $row["cpfUsuario"];
         
                     // Dados específicos da tabela 'candidato'
                    
                 }
         
                 // Após a autenticação bem-sucedida
                 session_regenerate_id(true);
             }
         }
         
         $conn->close();
         ?>
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar-dark accordion fixed" id="accordionSidebar" style="background-color: #094c00;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
               <div class="sidebar-brand-icon ">
                  <img src="img/logo.png" alt="Logo" style="width: 30px; height: 40px;">
               </div>
               <div class="sidebar-brand-text mx-3">SisCTemp </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Interface
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <!-- Página Inicial -->
            <li class="nav-item">
               <a class="nav-link" href="system.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Página Inicial</span>
               </a>
            </li>
            <!-- Minha Foto -->
            <!-- Cadastros -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCadastros"
                  aria-expanded="true" aria-controls="collapseCadastros">
               <i class="fas fa-fw fa-clipboard"></i>
               <span>Meu Cadastro</span>
               </a>
               <div id="collapseCadastros" class="collapse" aria-labelledby="headingCadastros" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Opções de Cadastro</h6>
                     <a class="collapse-item" href="system_exibir_cadastro.php">Meus dados</a>
                     <a class="collapse-item" href="system_editar_cad.php">Editar Cadastro</a>
                     <a class="collapse-item" href="system_editar_cad.php">Alterar Senha</a>
                     <a class="collapse-item" href="system_editar_cad.php">modificar Foto</a>
                  </div>
               </div>

            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Especialidade</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Opções de Cadastro</h6>
                     <a class="collapse-item" href="system_exibir_cadastro.php">Realizar inscrição</a>
                     <a class="collapse-item" href="system_editar_cad.php">Gerar Curriculo</a>
                      
                    </div>
                </div>
            </li>

        
            <!-- Pesquisas -->
            <!-- Fale conosco -->
            <li class="nav-item">
               <a class="nav-link" href="fale-conosco.html">
               <i class="fas fa-fw fa-envelope"></i>
               <span>Fale conosco</span>
               </a>
            </li>
            <!-- Configuração da Seleção -->
            <!-- Passagem de Etapa -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
               <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <!-- Sidebar Message -->
         </ul>
         <!-- End of Sidebar -->
         <!-- Content Wrapper -->
         <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
               <!-- Topbar -->
               <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                  <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Topbar Search -->
                  <!-- Topbar Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                     <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                           aria-labelledby="searchDropdown">
                        </div>
                     </li>
                     <!-- Nav Item - Alerts -->
                     <li class="nav-item dropdown no-arrow mx-1">
                     </li>
                     <!-- Nav Item - Messages -->
                     <li class="nav-item dropdown no-arrow mx-1">
                     </li>
                     <div class="topbar-divider d-none d-sm-block"></div>
                     <!-- Nav Item - User Information -->
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nomeCandidato; ?></span>
                        <img class="img-profile rounded-circle"
                           id="user-image">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                           aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="logout.php" >
                           <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                           Logout
                           </a>
                        </div>
                     </li>
                  </ul>
               </nav>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: #094c00;">
                                       Sistema de cadastramento de militares Temporarios
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Editar dados de Inscrição</div>
                                 </div>
                                 <div class="col-auto">
                                    <img src="img/logo-eb.png" alt="Logo" style="width: 40px; height: 60px;">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Earnings (Monthly) Card Example -->
                     <!-- Content Row -->
                     <div class="col-md-12 mb-4">
                        <!-- Coluna 1 -->
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Dados Pessoais
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                 </div>
                                 <!-- Área PHP Coluna 1 -->
                                 <form action="cadastro_processar.php" method="post" enctype="multipart/form-data" id="myform">
                                    <div class="form-group row">
                                       <!-- Dados Pessoais -->
                                       <div class="col-md-8">
                                          <label for="nomeCompleto">Nome Completo:</label>
                                          <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" required oninput="toUpperCase()" placeholder="" value="<?php echo htmlspecialchars($row['nomeCompleto']); ?>" required>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="cpf">CPF:</label>
                                          <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" maxlength="14" value="<?php echo htmlspecialchars($row['cpf']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="identidadeOrgaoExp">Identidade/Orgão Exp.:</label>
                                          <input type="text" class="form-control" id="identidadeOrgaoExp" name="identidadeOrgaoExp" required value="<?php echo htmlspecialchars($row['identidadeOrgaoExp']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="nacionalidade">Nacionalidade:</label>
                                          <select class="form-control" id="nacionalidade" name="nacionalidade" required>
                                             <option value="">Selecione ...</option>
                                             <option value="Brasileiro" <?php echo ($row['nacionalidade'] == 'Brasileiro') ? 'selected' : ''; ?>>Brasileiro</option>
                                          </select>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="sexo">Sexo:</label>
                                          <select class="form-control" id="sexo" name="sexo" required>
                                             <option value="">Selecione ...</option>
                                             <option value="Masculino" <?php echo ($row['sexo'] == 'Masculino') ? 'selected' : ''; ?>>Masculino</option>
                                             <option value="Feminino" <?php echo ($row['sexo'] == 'Feminino') ? 'selected' : ''; ?>>Feminino</option>
                                             <option value="Outro" <?php echo ($row['sexo'] == 'Outro') ? 'selected' : ''; ?>>Outro</option>
                                          </select>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="estadoCivil">Estado Civil:</label>
                                          <select class="form-control" id="estadoCivil" name="estadoCivil" required>
                                             <option value="">Selecione ...</option>
                                             <option value="Casado(a)" <?php echo ($row['estadoCivil'] == 'Casado(a)') ? 'selected' : ''; ?>>Casado(a)</option>
                                             <option value="Solteiro(a)" <?php echo ($row['estadoCivil'] == 'Solteiro(a)') ? 'selected' : ''; ?>>Solteiro(a)</option>
                                             <option value="União Estável" <?php echo ($row['estadoCivil'] == 'União Estável') ? 'selected' : ''; ?>>União Estável</option>
                                             <option value="Viúvo(a)" <?php echo ($row['estadoCivil'] == 'Viúvo(a)') ? 'selected' : ''; ?>>Viúvo(a)</option>
                                             <option value="Outro" <?php echo ($row['estadoCivil'] == 'Outro') ? 'selected' : ''; ?>>Outro</option>
                                          </select>
                                       </div>
                                       <div class="col-md-8">
                                          <label for="naturalidade" >Naturalidade:</label>
                                          <select class="form-select" name="naturalidade" id="naturalidade" required>
                                             <option value="">Selecione uma cidade</option>
                                             <!-- Adicione as opções e lógica conforme necessário -->
                                          </select>
                                       </div>
                                       <div class="col-md-6">
                                          <label for="filiacaoPai">Filiação (Pai):</label>
                                          <input type="text" class="form-control" name="filiacaoPai" placeholder="" required value="<?php echo htmlspecialchars($row['filiacaoPai']); ?>">
                                       </div>
                                       <div class="col-md-6">
                                          <label for="filiacaoMae">Filiação (Mãe):</label>
                                          <input type="text" class="form-control" name="filiacaoMae" placeholder="" required value="<?php echo htmlspecialchars($row['filiacaoMae']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="dataNascimento">Data de Nascimento:</label>
                                          <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required value="<?php echo htmlspecialchars($row['dataNascimento']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="numDependentes">Dependentes:</label>
                                          <select class="form-control" id="numDependentes" name="numDependentes" required>
                                             <option value="0" <?php echo ($row['numDependentes'] == 0) ? 'selected' : ''; ?>>Não possuo dependentes</option>
                                             <option value="1" <?php echo ($row['numDependentes'] == 1) ? 'selected' : ''; ?>>Possuo 1 dependente</option>
                                             <!-- Adicione as opções conforme necessário -->
                                          </select>
                                       </div>
                                       <div class="col-md-4">
                                          <label for="nomeSocial">Nome Social (Opcional):</label>
                                          <input type="text" class="form-control" id="nomeSocial" name="nomeSocial" value="<?php echo htmlspecialchars($row['nomeSocial']); ?>">
                                       </div>
                                    </div>
                                    <hr class="my-4">
                                    <h5 class="mb-3">Dados pessoais</h5>
                                    <div class="form-group row">
                                       <!-- Dados de Endereço -->
                                       <div class="col-md-4">
                                          <label for="cep">CEP:</label>
                                          <input type="text" class="form-control" name="cep" id="cepInput" placeholder="" required value="<?php echo htmlspecialchars($row['cep']); ?>">
                                          <!-- Restante do código ... -->
                                       </div>
                                       <div class="col-md-4">
                                          <label for="estado">Estado:</label>
                                          <input type="text" class="form-control" name="estado" id="ufInput" placeholder="" required value="<?php echo htmlspecialchars($row['estado']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="cidade">Cidade:</label>
                                          <input type="text" class="form-control" name="cidade" id="cidadeInput" placeholder="" required value="<?php echo htmlspecialchars($row['cidade']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="logradouro">Logradouro:</label>
                                          <input type="text" class="form-control" name="logradouro" id="logradouroInput" placeholder="" value="<?php echo htmlspecialchars($row['logradouro']); ?>">
                                       </div>
                                       <div class="col-md-8">
                                          <label for="bairro">Bairro:</label>
                                          <input type="text" class="form-control" name="bairro" id="bairroInput" placeholder="" value="<?php echo htmlspecialchars($row['bairro']); ?>">
                                       </div>
                                    </div>
                                    <hr class="my-4">
                                    <h5 class="mb-3 text-warning">Contatos</h5>
                                    <div class="form-group row">
                                       <!-- Dados de Contato -->
                                       <div class="col-md-4">
                                          <label for="email">E-mail:</label>
                                          <input type="email" class="form-control" id="email" name="email" required value="<?php echo htmlspecialchars($row['email']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="telefoneContato">Telefone para Contato:</label>
                                          <input type="text" class="form-control" id="telefoneContato" name="telefoneContato" required value="<?php echo htmlspecialchars($row['telefoneContato']); ?>">
                                       </div>
                                       <div class="col-md-4">
                                          <label for="telefoneRecados">Telefone para Recados (Opcional):</label>
                                          <input type="text" class="form-control" id="telefoneRecados" name="telefoneRecados" value="<?php echo htmlspecialchars($row['telefoneRecados']); ?>">
                                       </div>
                                    </div>
                                    <hr class="my-4">
                                    <h5 class="mb-3 text-warning">Serviço Militar anterior</h5>
                                    <div class="form-group row">
                                       <!-- Dados de Serviço Militar -->
                                       <div class="col-md-12">
                                          <label for="tempoServicoMilitar">Tempo de serviço militar:</label>
                                          <select class="form-control" id="tempoServicoMilitar" name="tempoServicoMilitar" required>
                                             <option value="0" <?php echo ($row['tempoServicoMilitar'] == 0) ? 'selected' : ''; ?>>Selecione ...</option>
                                             <option value="sim" <?php echo ($row['tempoServicoMilitar'] == 'sim') ? 'selected' : ''; ?>>Sim</option>
                                             <option value="nao" <?php echo ($row['tempoServicoMilitar'] == 'nao') ? 'selected' : ''; ?>>Não</option>
                                          </select>
                                       </div>
                                       <div id="camposAdicionais" style="display: none;">
                                          <div class="col-md-12">
                                             <label for="anosMilitar">Anos:</label>
                                             <select class="form-control" id="anosMilitar" name="anosMilitar" required>
                                                <option value="0" <?php echo ($row['anosMilitar'] == 0) ? 'selected' : ''; ?>>Selecione quantos anos</option>
                                                <option value="1" <?php echo ($row['anosMilitar'] == 1) ? 'selected' : ''; ?>>1</option>
                                                <option value="2" <?php echo ($row['anosMilitar'] == 2) ? 'selected' : ''; ?>>2</option>
                                                <!-- Adicione as opções para anos conforme necessário -->
                                             </select>
                                          </div>
                                          <div class="col-md-12">
                                             <label for="mesesMilitar">Meses:</label>
                                             <select class="form-control" id="mesesMilitar" name="mesesMilitar" required>
                                                <option value="0" <?php echo ($row['mesesMilitar'] == 0) ? 'selected' : ''; ?>>Selecione ...</option>
                                                <option value="1" <?php echo ($row['mesesMilitar'] == 1) ? 'selected' : ''; ?>>1</option>
                                                <option value="2" <?php echo ($row['mesesMilitar'] == 2) ? 'selected' : ''; ?>>2</option>
                                                <!-- Adicione as opções para meses conforme necessário -->
                                             </select>
                                          </div>
                                          <div class="col-md-12">
                                             <label for="diasMilitar">Dias:</label>
                                             <select class="form-control" id="diasMilitar" name="diasMilitar" required>
                                                <option value="0" <?php echo ($row['diasMilitar'] == 0) ? 'selected' : ''; ?>>Selecione ...</option>
                                                <option value="0" <?php echo ($row['diasMilitar'] == 0) ? 'selected' : ''; ?>>0</option>
                                                <option value="1" <?php echo ($row['diasMilitar'] == 1) ? 'selected' : ''; ?>>1</option>
                                                <option value="2" <?php echo ($row['diasMilitar'] == 2) ? 'selected' : ''; ?>>2</option>
                                                <!-- Adicione as opções para dias conforme necessário -->
                                             </select>
                                          </div>
                                       </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="d-grid gap-2">
                                       <button class="btn mt-3" style="background-color: #094c00; color:white;" type="submit">Atualizar dados cadastrais</button>
                                    </div>
                                 </form>
                                 <!-- Área PHP Coluna 1 -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Area Chart -->
         <!-- Pie Chart -->
         <!-- Content Row -->
      </div>
      <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- End of Content Wrapper -->
      </div>
      <!-- End of Page Wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
      <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
      <script>
         // Obtém o número do CPF do usuário (substitua pelo valor correto)
         var userCPF = "<?php echo $cpf; ?>"; // Envolve o valor do PHP com aspas
         
         // Constrói o caminho da imagem com base no número do CPF
         var imagePath = "uploads/" + userCPF + ".jpg"; // Altere a extensão conforme necessário (por exemplo, .png)
         
         // Obtém o elemento <img> pelo ID
         var userImage = document.getElementById("user-image");
         
         // Define o caminho da imagem como o atributo src
         userImage.src = imagePath;
      </script>
   </body>
</html>