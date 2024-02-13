<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Opções</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <style>
         body {
         background: linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(9, 121, 29, 0.8267682072829132) 29%, rgba(0, 0, 0, 1) 100%);
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
         background-color: #4e73df; /* Azul do SB Admin 2 */
         border: none;
         color: #fff; /* Cor do texto */
         }
         .btn-option:hover {
         background-color: #2e59d9; /* Cor mais escura no hover */
         }
         .text-center {
         text-align: center;
         }
         .card {
         border: none;
         border-radius: 10px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         }
         .card-body {
         padding: 40px;
         }
      </style>
   </head>
   <body>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TCR<sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Area de Cadastro</h6>
                <a class="collapse-item" href="ficha_01.php">Sócio Demográfico</a>
                <a class="collapse-item" href="ficha_02.php">Teleatendimento</a>
                <a class="collapse-item" href="ficha_03.php">Avaliação de Edmonton </a>
                <a class="collapse-item" href="ficha_04.php">Avaliação da teleconsulta </a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Ferramentas</h6>
                <a class="collapse-item" href="pesquisar.php">Pesquisar ID</a>
                <a class="collapse-item" href="relatorio_indv_01.php">Relatorio Individual</a>
                <a class="collapse-item" href="index.php">Sair</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
</ul>
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
               </nav>
               <!-- End of Topbar -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- Page Heading -->
                  <!-- Content Row -->
                  <div class="row">
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Ficha Para Teleatendimento</div>
                                 </div>
                                 <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                       Informações Gerais
                                    </div>
                                    <form action="ficha_03_processar.php" method="POST">
                                       <div class="form-group">
                                          <label for="pacienteId">ID do Paciente:</label>
                                          <input type="text" class="form-control" id="pacienteId" name="pacienteId">
                                       </div>
                                       <!-- Dor -->
                                       <div class="form-group">
                                          <label for="dor">Dor:</label>
                                          <input type="range" class="form-control-range range-slider" id="dor" name="dor" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="dorValue">0</span></span>
                                       </div>
                                       <!-- Cansaço -->
                                       <div class="form-group">
                                          <label for="cansaco">Cansaço:</label>
                                          <input type="range" class="form-control-range range-slider" id="cansaco" name="cansaco" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="cansacoValue">0</span></span>
                                       </div>
                                       <!-- Sonolência -->
                                       <div class="form-group">
                                          <label for="sonolencia">Sonolência:</label>
                                          <input type="range" class="form-control-range range-slider" id="sonolencia" name="sonolencia" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="sonolenciaValue">0</span></span>
                                       </div>
                                       <!-- Náusea -->
                                       <div class="form-group">
                                          <label for="nausea">Náusea:</label>
                                          <input type="range" class="form-control-range range-slider" id="nausea" name="nausea" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="nauseaValue">0</span></span>
                                       </div>
                                       <!-- Falta de Apetite -->
                                       <div class="form-group">
                                          <label for="faltaApetite">Falta de Apetite:</label>
                                          <input type="range" class="form-control-range range-slider" id="faltaApetite" name="faltaApetite" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="faltaApetiteValue">0</span></span>
                                       </div>
                                       <!-- Falta de Ar -->
                                       <div class="form-group">
                                          <label for="faltaAr">Falta de Ar:</label>
                                          <input type="range" class="form-control-range range-slider" id="faltaAr" name="faltaAr" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="faltaArValue">0</span></span>
                                       </div>
                                       <!-- Depressão -->
                                       <div class="form-group">
                                          <label for="depressao">Depressão:</label>
                                          <input type="range" class="form-control-range range-slider" id="depressao" name="depressao" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="depressaoValue">0</span></span>
                                       </div>
                                       <!-- Ansiedade -->
                                       <div class="form-group">
                                          <label for="ansiedade">Ansiedade:</label>
                                          <input type="range" class="form-control-range range-slider" id="ansiedade" name="ansiedade" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="ansiedadeValue">0</span></span>
                                       </div>
                                       <!-- Bem-Estar/Mal-Estar -->
                                       <div class="form-group">
                                          <label for="bemEstar">Bem-Estar/Mal-Estar:</label>
                                          <input type="range" class="form-control-range range-slider" id="bemEstar" name="bemEstar" min="0" max="10" step="1">
                                          <span class="range-label">Valor selecionado: <span id="bemEstarValue">0</span></span>
                                       </div>
                                       <!-- Outro problema -->
                                       <div class="form-group">
                                          <label for="outroProblema">Outro problema (prisão de ventre, etc.):</label>
                                          <input type="text" class="form-control" id="outroProblema" name="outroProblema">
                                       </div>
                                       <!-- Botão de envio -->
                                       <button type="submit" class="btn btn-primary">Enviar</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Content Row -->
               </div>
               <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="text-center">
                     <span>Copyright &copy; Your Website 2021</span>
                  </div>
               </div>
            </footer>
            <!-- End of Footer -->
         </div>
         <!-- End of Content Wrapper -->
         <!-- Scroll to Top Button-->
         <a class="scroll-to-top rounded" href="#page-top">
         <i class="fas fa-angle-up"></i>
         </a>
         <!-- Logout Modal-->
      </div>
      <!-- End of Page Wrapper -->
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
         $(document).ready(function() {
             $('input[type="range"]').on('input', function() {
                 var value = parseInt($(this).val());
                 var id = $(this).attr('id');
                 var legendId = id + 'Value';
         
                 // Atualiza o valor da legenda
                 $('#' + legendId).text(value);
         
                 // Atualiza a cor do span
                 var colorClass = getColorClass(value);
                 $('#' + legendId).removeClass('text-danger text-warning text-success');
                 $('#' + legendId).addClass(colorClass);
             });
         
             // Função para obter a classe de cor com base no valor
             function getColorClass(value) {
                 if (value < 3) {
                     return 'text-success';
                 } else if (value < 7) {
                     return 'text-warning';
                 } else {
                     return 'text-danger';
                 }
             }
         });
      </script>
   </body>
</html>