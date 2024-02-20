<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>SisCTemp</title>
      <link rel="icon" type="image/png" href="../img/favicon.ico">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
      <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
      <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
      <link href="../css/sb-admin-2.min.css" rel="stylesheet">
      <style>
         /* Adicione outras regras de estilo conforme necessário */
         img {
         max-width: 100%;
         height: auto;
         }
      </style>
   </head>
   <body>
      <?php
         require('../bd_conect.php');
         session_start();
         
         if (!isset($_SESSION['usuario_id'])) {
             header("Location: ../index.php");
             exit();
         }
         
         //if ($_SESSION["tipo"] !== "candidato") {
         //   header("Location: fail/access_denied.php");
         //   exit();
         //}
         
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
             if (isset($_SESSION["usuario_id"])) {
                 $idCandidato = $_SESSION["usuario_id"];
         
                 // Conecte-se ao banco de dados (substitua com suas configurações de conexão)
         
                 // Consulta SQL para obter o nome do candidato com base no ID
                 $sql = "SELECT nome, cpf FROM usuarios WHERE id = $idCandidato";
         
                 $result = $conn->query($sql);
         
                 if ($result->num_rows == 1) {
                     $row = $result->fetch_assoc();
                     $nomeCandidato = $row["nome"];
                     $cpf = $row["cpf"];
                 }
         
                 $conn->close();
             }
         }
         ?>
      <!-- Page Wrapper -->
      <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav sidebar sidebar-dark accordion fixed" id="accordionSidebar"
         style="background-color: #094c00;">
         <!-- Sidebar - Brand -->
         <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../system.php">
            <div class="sidebar-brand-icon ">
               <img src="../img/logo.png" alt="Logo" style="width: 30px; height: 40px;">
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
            <a class="nav-link" href="../system.php">
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
            <div id="collapseCadastros" class="collapse" aria-labelledby="headingCadastros"
               data-parent="#accordionSidebar">
               <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Opções de Cadastro</h6>
                  <a class="collapse-item" href="../system_exibir_cadastro.php">Meus dados</a>
                  <a class="collapse-item" href="../system_editar_cad.php">Editar Cadastro</a>
                  <a class="collapse-item" href="../system_editar_cad.php">Alterar Senha</a>
                  <a class="collapse-item" href="../system_editar_cad.php">modificar Foto</a>
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
                  <a class="collapse-item" href="../system_cad_esp.php">Realizar inscrição</a>
                  <a class="collapse-item" href="../system_editar_cad.php">Gerar Curriculo</a>
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
                     <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                     <?php echo $nomeCandidato; ?>
                     </span>
                     <img class="img-profile rounded-circle" id="user-image">
                     </a>
                     <!-- Dropdown - User Information -->
                     <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="../logout.php">
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
                     <div class="card border-left-warning shadow h-100 py-2" >
                        <div class="card-body">
                           <div class="row no-gutters align-items-center">
                              <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-uppercase mb-1"
                                    style="color: #094c00;">
                                    Sistema de cadastramento de militares Temporarios
                                 </div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">Oficial Técnico
                                    Temporário - Cursos Complementares
                                 </div>
                              </div>
                              <div class="col-auto">
                                 <img src="../img/asp.jpg" alt="Logo" style="width: 70px; height: 80px;">
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
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                                       >
                                       4º Passo -  Cursos Complementares não elencados no Anexo “R”
                                    </div>
                                 </div>
                              </div>

                              <form onsubmit="submitForm(event)">
                                    <div class="mb-3">
                                    <label for="nomeCurso" class="form-label">Nome do Curso Complementar:</label>
                                    <input type="text" class="form-control" id="nomeCurso" placeholder="Digite o nome do curso complementar">
                                    </div>
                                    <div class="mb-3">
                                    <label for="cargaHoraria" class="form-label">Carga Horária:</label>
                                    <input type="number" class="form-control" id="cargaHoraria" placeholder="Digite a carga horária (em horas)">
                                    </div>
                                    <div class="mb-3">
                                    <label for="dataConclusao" class="form-label">Data de Conclusão:</label>
                                    <input type="date" class="form-control" id="dataConclusao">
                                    </div>
                                    <div class="mb-3">
                                    <label for="docAnexo" class="form-label">Documento Anexo (que comprove o curso):</label>
                                    <input type="file" class="form-control" id="docAnexo">
                                    </div>
                                    <button type="submit" class="btn btn-block btn-outline-success">Cadastrar</button>
                                </form>
                           </div>

                        </div>
                     </div>
                  <!-- Earnings (Monthly) Card Example -->
                  <!-- Content Row -->
               </div>
            </div>
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>Copyright &copy; Your Website 2021</span>
                  </div>
               </div>
            </footer>
         </div>
      </div>
      <!-- Area Chart -->
      <!-- Pie Chart -->
      <!-- End of Main Content -->
      <!-- Footer -->
      <!-- End of Footer -->
      <!-- End of Page Wrapper -->
      <!-- Bootstrap core JavaScript-->
      <script src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script>
      <script
         src="https://startbootstrap.github.io/startbootstrap-sb-admin-2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="../js/sb-admin-2.min.js"></script>
      <!-- Page level plugins -->
      <script src="../vendor/chart.js/Chart.min.js"></script>
      <!-- Page level custom scripts -->
      <script src="../js/demo/chart-area-demo.js"></script>
      <script src="js/demo/chart-pie-demo.js"></script>
      <script>
         // Obtém o número do CPF do usuário (substitua pelo valor correto)
         var userCPF = "<?php echo $cpf; ?>"; // Envolve o valor do PHP com aspas
         
         // Constrói o caminho da imagem com base no número do CPF
         var imagePath = "../uploads/" + userCPF + ".jpg"; // Altere a extensão conforme necessário (por exemplo, .png)
         
         // Obtém o elemento <img> pelo ID
         var userImage = document.getElementById("user-image");
         
         // Define o caminho da imagem como o atributo src
         userImage.src = imagePath;
      </script>
   </body>
</html>