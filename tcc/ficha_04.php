<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR | Avaliação da teleconsulta </title>
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
         <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #65b22e;">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-user-nurse"></i>
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
            <span>Minhas Fichas</span>
        </a>
        <div id="collapseTwo" class="collapse " aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
            <span>Relatórios</span>
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
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Avaliação do Acompanhamento por Teleconsulta </div>
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
                                    
                                 </div>
                                 
                              </div>
                              <form action="ficha_04_processar.php" method="post">
                                       <div class="form-group">
                                          <label for="pacienteId">ID do Paciente:</label>
                                          <input type="text" class="form-control" id="pacienteId" name="pacienteId">
                                       </div>
                                       <div class="mb-3">
                                          <label for="iniciais" class="form-label">Por favor, preencha suas iniciais:</label>
                                          <input type="text" class="form-control" id="iniciais" name="iniciais" required>
                                       </div>
                                       <div class="mb-3">
                                          <label for="data_nascimento" class="form-label">Sua data de nascimento (dia, mês, ano):</label>
                                          <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
                                       </div>
                                       <div class="mb-3">
                                          <label for="data_hoje" class="form-label">Data de hoje (dia, mês, ano):</label>
                                          <input type="date" class="form-control" id="data_hoje" name="data_hoje" required>
                                       </div>
                                       <!-- Perguntas do questionário -->
                                       <?php
                                          $perguntas = array(
                                              "Você teve dificuldade para compreender as orientações prestadas?",
                                              "Você sentiu dificuldade para participar da teleconsulta?",
                                              "Você precisou de ajuda para se conectar ao WhatsApp?",
                                              "As consultas interferiram positivamente na sua vida familiar?",
                                              "O acompanhamento semanal proporcionou maior autonomia nas AVDs?",
                                              "O acompanhamento semanal ajudou no manejo dos medicamentos?",
                                              "As orientações fornecidas ajudaram a lidar com os sintomas clínicos (caso tenha surgido) nos últimos dias?",
                                              "O acompanhamento de enfermagem semanal forneceu algum suporte emocional a você ou a seu cuidador?",
                                              "As teleconsultas forneceram maior educação em saúde no seu tratamento para você e sua família?",
                                              "Na sua opinião, as consultas a distância te deixaram mais seguro no tratamento?",
                                              "Na sua opinião, um acompanhamento a distância ajuda a reduzir gastos para você e sua família?",
                                              "Na sua opinião, as consultas a distância ajudam a reduzir o tempo de deslocamento ao hospital?",
                                              "Na sua opinião, o acompanhamento a distância pela enfermagem foi útil?"
                                          );
                                          
                                          foreach ($perguntas as $index => $pergunta) {
                                              echo '<div class="mb-3">';
                                              echo '<label for="pergunta' . ($index + 1) . '" class="form-label">' . ($index + 1) . '. ' . $pergunta . '</label>';
                                              echo '<select class="form-select" id="pergunta' . ($index + 1) . '" name="pergunta' . ($index + 1) . '" required>';
                                              echo '<option value="nao">NÃO</option>';
                                              echo '<option value="pouco">POUCO</option>';
                                              echo '<option value="moderado">MODERADO</option>';
                                              echo '<option value="muito">MUITO</option>';
                                              echo '</select>';
                                              echo '</div>';
                                          }
                                          ?>
                                       <!-- Botão de envio -->
                                       <button type="submit" class="btn btn-block btn-success" style="background-color: #65b22e;">Enviar</button>
                                    </form>
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
                        <span>TCR &copy; Whaniza Sulana Costa Silva</span>
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