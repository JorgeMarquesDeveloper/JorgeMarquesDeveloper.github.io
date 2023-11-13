<!DOCTYPE html>
<html>
   <head>
      <title>SisCTemp</title>
      <link rel="icon" type="image/png" href="img/favicon.ico">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <style>

      </style>
   </head>
   <body>
      <?php
         session_start();
         
         if(!isset($_SESSION['candidato_id'])) {
             header("Location: index.php");
             exit();
         }
         
         // Verifique se a variável de última atividade está definida
         if (isset($_SESSION["last_activity"])) {
             $inactive_time = 300; // Tempo de inatividade em segundos (60 segundos = 1 minuto)
         
             // Verifique se o tempo de inatividade excedeu o limite
             if (time() - $_SESSION["last_activity"] > $inactive_time) {
                 // Encerre a sessão
                 session_unset();
                 session_destroy();
                 header("Location: index.php"); // Redirecione para a tela de login
                 exit();
             }
         }
         
         // Atualize o último momento de atividade
         $_SESSION["last_activity"] = time();
         
         if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
             if (isset($_SESSION["candidato_id"])) {
                 $idCandidato = $_SESSION["candidato_id"];
         
                 // Conecte-se ao banco de dados (substitua com suas configurações de conexão)
                 $servername = "localhost";
                 $username = "root";
                 $password = "";
                 $dbname = "sisctemp_bd";
                 $cpf = "";
         
                 $conn = new mysqli($servername, $username, $password, $dbname);
         
                 if ($conn->connect_error) {
                     die("Falha na conexão com o banco de dados: " . $conn->connect_error);
                 }
         
                 // Consulta SQL para obter o nome do candidato com base no ID
                 $sql = "SELECT nomeCompleto, cpf FROM candidato WHERE id = $idCandidato";
         
                 $result = $conn->query($sql);
         
                 if ($result->num_rows == 1) {
                     $row = $result->fetch_assoc();
                     $nomeCandidato = $row["nomeCompleto"];
                     $cpf = $row["cpf"];
                 }
         
                 $conn->close();
             }
         }
         ?>
      <!-- Page Wrapper -->
      <div id="wrapper" >
         <!-- Sidebar -->
         <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #094c00;">
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
               <a class="nav-link" href="admin.php">
               <i class="fas fa-fw fa-home"></i>
               <span>Página Inicial</span>
               </a>
            </li>
            <!-- Minha Foto -->
            <li class="nav-item">
               <a class="nav-link" href="minha-foto.html">
               <i class="fas fa-fw fa-image"></i>
               <span>Minha Foto</span>
               </a>
            </li>
            <!-- Cadastros -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCadastros"
                  aria-expanded="true" aria-controls="collapseCadastros">
               <i class="fas fa-fw fa-clipboard"></i>
               <span>Cadastros</span>
               </a>
               <div id="collapseCadastros" class="collapse" aria-labelledby="headingCadastros" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Opções de Cadastros:</h6>
                     <a class="collapse-item" href="documentos-obrigatorios.html">Documentos Obrigatórios</a>
                     <a class="collapse-item" href="curriculo.html">Currículo</a>
                     <a class="collapse-item" href="especialidade.html">Especialidade</a>
                     <a class="collapse-item" href="insert_user.php">Usuário</a>
                  </div>
               </div>
            </li>
            <!-- Pesquisas -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePesquisas"
                  aria-expanded="true" aria-controls="collapsePesquisas">
               <i class="fas fa-fw fa-search"></i>
               <span>Pesquisas</span>
               </a>
               <div id="collapsePesquisas" class="collapse" aria-labelledby="headingPesquisas" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Opções de Pesquisas:</h6>
                     <a class="collapse-item" href="candidatos-participando.html">Participando</a>
                     <a class="collapse-item" href="candidatos-desclassificados.html">Desclassificados</a>
                     <a class="collapse-item" href="usuario.html">Usuário</a>
                  </div>
               </div>
            </li>
            <!-- Fale conosco -->
            <li class="nav-item">
               <a class="nav-link" href="fale-conosco.html">
               <i class="fas fa-fw fa-envelope"></i>
               <span>Fale conosco</span>
               </a>
            </li>
            <!-- Configuração da Seleção -->
            <li class="nav-item">
               <a class="nav-link" href="configuracao-selecao.html">
               <i class="fas fa-fw fa-cogs"></i>
               <span>Configuração da Seleção</span>
               </a>
            </li>
            <!-- Passagem de Etapa -->
            <li class="nav-item">
               <a class="nav-link" href="passagem-etapa.html">
               <i class="fas fa-fw fa-check-circle"></i>
               <span>Passagem de Etapa</span>
               </a>
            </li>
            <!-- Auditoria -->
            <li class="nav-item">
               <a class="nav-link" href="auditoria.html">
               <i class="fas fa-fw fa-history"></i>
               <span>Auditoria</span>
               </a>
            </li>
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
                  <form
                     class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                     <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                           aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <button class="btn" type="button" style="background-color: #094c00;">
                           <i class="fas fa-search fa-sm;"  style="color: #FFF;"></i>
                           </button>
                        </div>
                     </div>
                  </form>
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
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nomeCandidato; ?></span>
                        <img class="img-profile rounded-circle"
                           id="user-image">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                           aria-labelledby="userDropdown">
                           <a class="dropdown-item" href="#">
                           <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                           Profile
                           </a>
                           <a class="dropdown-item" href="#">
                           <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                           Settings
                           </a>
                           <a class="dropdown-item" href="#">
                           <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                           Activity Log
                           </a>
                           <div class="dropdown-divider"></div>
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
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Sistema de cadastramento de militares Temporarios
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Cadastrar Usuario</div>
                                 </div>
                                 <div class="col-auto">
                                    <img src="img/logo-eb.png" alt="Logo" style="width: 40px; height: 60px;">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       <div class="row-5">
                                         
                                          <form action="cadastro_processar.php" method="post"  enctype="multipart/form-data">
                                             <div class="form-group row">
                                                <div class="col-md-8">
                                                   <label for="nomeCompleto">Nome Completo:</label>
                                                   <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" required oninput="toUpperCase()" placeholder="" value="" required>
                                                </div>
                                                <div class="col-md-4">
                                                   <label for="cpf">CPF:</label>
                                                   <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" maxlength="14" >
                                                </div>
                                                <div class="col-md-4">
                                                   <label for="identidadeOrgaoExp">Identidade/Orgão Exp.:</label>
                                                   <input type="text" class="form-control" id="identidadeOrgaoExp" name="identidadeOrgaoExp" required>
                                                </div>
                                                <div class="col-md-8">
                                                   <label for="estadoCivil">Posto/Graduação:</label>
                                                   <select class="form-control" id="estadoCivil" name="estadoCivil" required>
                                                      <option value="">Selecione ...</option>
                                                      <option value="Casado(a)">Soldado</option>
                                                      <option value="Solteiro(a)">Solteiro(a)</option>
                                                      <option value="União Estável">União Estável</option>
                                                      <option value="Viúvo(a)">Viúvo(a)</option>
                                                      <option value="Outro">Outro</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-12">
                                                   <label for="naturalidade" >Naturalidade:</label>
                                                   <select class="form-select" name="naturalidade" id="naturalidade" required>
                                                      <option value="">Selecione uma cidade</option>
                                                   </select>
                                                </div>
                                                <div class="col-md-6">
                                                   <label for="filiacaoPai">Filiação (Pai):</label>
                                                   <input type="text" class="form-control" name="filiacaoPai" placeholder="" required>
                                                </div>
                                                <div class="col-md-6">
                                                   <label for="filiacaoMae">Filiação (Mãe):</label>
                                                   <input type="text" class="form-control" name="filiacaoMae" placeholder="" required>
                                                </div>
                                             </div>
                                       </div>
                                       <div class="d-grid gap-2">
                                       <button class="btn  mt-3" style="background-color: #094c00; color:white;" type="submit">Cadastrar</button>
                                       </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Earnings (Monthly) Card Example -->
                        </div>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-4 col-md-6 mb-4">
                        </div>
                        <!-- Pending Requests Card Example -->
                     </div>
                     <!-- Content Row -->
                     <!-- Content Row -->
                  </div>
                  <!-- /.container-fluid -->
               </div>
               <!-- End of Main Content -->
               <!-- Footer -->
               <!-- End of Footer -->
            </div>
            <!-- End of Content Wrapper -->
         </div>
         <!-- End of Page Wrapper -->
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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