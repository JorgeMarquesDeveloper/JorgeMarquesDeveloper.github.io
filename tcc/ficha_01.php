<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR | Sócio Demográfico</title>
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Formulário Do Perfil Sócio Demográfico</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Dados pessoais
                                    </div>
                                    <form action="ficha_01_processar.php" method="POST">
                                       <!-- Campo Nome -->
                                       <div class="form-group">
                                          <label for="nome">Nome:</label>
                                          <input type="text" class="form-control" id="nome" name="nome" required>
                                       </div>
                                       <!-- Campo Idade -->
                                       <div class="form-group">
                                          <label for="idade">Idade:</label>
                                          <select class="form-control" id="idade" name="idade" required>
                                             <option value="18-29">18 a 29 anos</option>
                                             <option value="30-49">30 a 49 anos</option>
                                             <option value="50-59">50 a 59 anos</option>
                                             <option value="60-79">60 a 79 anos</option>
                                             <option value="80-mais">80 anos ou mais</option>
                                          </select>
                                       </div>
                                       <!-- Campo Sexo -->
                                       <div class="form-group">
                                          <label>Sexo:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sexo-feminino" name="sexo" value="Feminino" required>
                                             <label class="form-check-label" for="sexo-feminino">Feminino</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sexo-masculino" name="sexo" value="Masculino" required>
                                             <label class="form-check-label" for="sexo-masculino">Masculino</label>
                                          </div>
                                       </div>
                                       <!-- Campo Escolaridade -->
                                       <div class="form-group">
                                          <label for="escolaridade">Escolaridade:</label>
                                          <select class="form-control" id="escolaridade" name="escolaridade" required>
                                          <option value="analfabeto">Analfabeto</option>
                                          <option value="fundamental">Fundamental</option>
                                             <option value="medio">Médio</option>
                                             <option value="superior">Superior</option>
                                             <option value="pos-graduacao">Pós-graduação</option>
                                          </select>
                                       </div>
                                       <!-- Campo Renda Familiar -->
                                       <div class="form-group">
                                          <label for="renda">Renda Familiar:</label>
                                          <select class="form-control" id="renda" name="renda" required>
                                             <option value="menos-1">Menos que 1 salário</option>
                                             <option value="1-2">1 a 2 salários</option>
                                             <option value="2-3">2 a 3 salários</option>
                                             <option value="mais-3">Mais de 3 salários</option>
                                          </select>
                                       </div>
                                       <!-- Campo Procedência -->
                                       <div class="form-group">
                                          <label for="procedencia">Procedência:</label>
                                          <select class="form-control" id="procedencia" name="procedencia" required>
                                             <option value="recife">Região metropolitana do Recife</option>
                                             <option value="mata">Zona da Mata</option>
                                             <option value="agreste">Agreste</option>
                                             <option value="sertao">Sertão</option>
                                          </select>
                                       </div>
                                       <!-- Campo Tempo de Deslocamento -->
                                       <div class="form-group">
                                          <label for="tempo-deslocamento">Tempo de Deslocamento:</label>
                                          <select class="form-control" id="tempo-deslocamento" name="tempo-deslocamento" required>
                                             <option value="menos-1h">Menos que 1h</option>
                                             <option value="1h-2h">1h a 2h</option>
                                             <option value="2h-5h">2h a 5h</option>
                                             <option value="mais-5h">Mais que 5h</option>
                                          </select>
                                       </div>
                                       <!-- Campo Tipo de Transporte -->
                                       <div class="form-group">
                                          <label for="tipo-transporte">Tipo de Transporte:</label>
                                          <select class="form-control" id="tipo-transporte" name="tipo-transporte" required>
                                             <option value="tfd">TFD</option>
                                             <option value="carro-proprio">Carro próprio</option>
                                             <option value="carro-alugado">Carro alugado</option>
                                             <option value="ambulancia">Ambulância</option>
                                             <option value="outros">Outros</option>
                                          </select>
                                       </div>
                                       <!-- Campo Passagem, Estadia e Refeição -->
                                       <div class="form-group">
                                          <label for="passagem-estadia-refeicao">Passagem, Estadia e Refeição:</label>
                                          <select class="form-control" id="passagem-estadia-refeicao" name="passagem-estadia-refeicao" required>
                                             <option value="menos-50">Menos que 50,00 Reais</option>
                                             <option value="50-100">50,00 a 100,00 Reais</option>
                                             <option value="mais-100">100,00 Reais ou mais</option>
                                          </select>
                                       </div>
                                       <!-- Campo Cuidador -->
                                       <div class="form-group">
                                          <label>Cuidador:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="cuidador-nao-possui" name="cuidador" value="Não possui cuidador" required>
                                             <label class="form-check-label" for="cuidador-nao-possui">Não possui cuidador</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="cuidador-familiar" name="cuidador" value="Familiar" required>
                                             <label class="form-check-label" for="cuidador-familiar">Familiar</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="cuidador-formal" name="cuidador" value="Formal" required>
                                             <label class="form-check-label" for="cuidador-formal">Formal</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="cuidador-outros" name="cuidador" value="Outros" required>
                                             <label class="form-check-label" for="cuidador-outros">Outros</label>
                                          </div>
                                       </div>
                                       <!-- Campo Força Motora -->
                                       <div class="form-group">
                                          <label for="forca-motora">Força Motora:</label>
                                          <select class="form-control" id="forca-motora" name="forca-motora" required>
                                             <option value="ativo">Ativo</option>
                                             <option value="passivo">Passivo</option>
                                             <option value="acamado">Acamado</option>
                                             <option value="cadeirante">Cadeirante</option>
                                          </select>
                                       </div>
                                       <!-- Adicione os outros campos do formulário da mesma forma -->
                                       <button type="submit" class="btn btn-success text-center">Enviar</button>
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
         <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </div>
                  <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                  <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                     <a class="btn btn-primary" href="login.html">Logout</a>
                  </div>
               </div>
            </div>
         </div>
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
   </body>
</html>