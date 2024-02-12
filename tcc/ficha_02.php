<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR | Ficha Para Teleatendimento</title>
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
                            <div class="card border-left-info shadow h-100 py-2">
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
                        <div class="card shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Informações Gerais</div>
                                 <form action="ficha_02_processar.php" method="POST">
                                       <!-- Seção 1: Informações Gerais -->
                                       
                                       <div class="form-group">
                                          <label for="pacienteId">ID do Paciente:</label>
                                          <input type="text" class="form-control" id="pacienteId" name="pacienteId">
                                       </div>
                                       <div class="form-group">
                                          <label for="data_ultima_consulta">Data da última consulta:</label>
                                          <input type="date" class="form-control" id="data_ultima_consulta" name="data_ultima_consulta" required>
                                       </div>

                                       <div class="form-group">
                                          <label for="kps_ultima_consulta">KPS da última consulta:</label>
                                          <input type="number" class="form-control" id="kps_ultima_consulta" name="kps_ultima_consulta" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="kps_telefonico">KPS estimado por meio do contato telefônico:</label>
                                          <input type="number" class="form-control" id="kps_telefonico" name="kps_telefonico" required>
                                       </div>
                                       <div class="form-group">
                                          <label for="alteracao_significativa">Alguma alteração significativa:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="alteracao_significativa_nao" name="alteracao_significativa" value="Não" checked>
                                             <label class="form-check-label" for="alteracao_significativa_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="alteracao_significativa_sim" name="alteracao_significativa" value="Sim">
                                             <label class="form-check-label" for="alteracao_significativa_sim">Sim, qual?</label>
                                             <input type="text" class="form-control" id="alteracao_significativa_descricao" name="alteracao_significativa_descricao">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="esteve_spa">Esteve no SPA desde a última consulta:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="esteve_spa_nao" name="esteve_spa" value="Não" checked>
                                             <label class="form-check-label" for="esteve_spa_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="esteve_spa_sim" name="esteve_spa" value="Sim">
                                             <label class="form-check-label" for="esteve_spa_sim">Sim, motivo:</label>
                                             <input type="text" class="form-control" id="esteve_spa_motivo" name="esteve_spa_motivo">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="esteve_internado">Esteve internado desde a última consulta:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="esteve_internado_nao" name="esteve_internado" value="Não" checked>
                                             <label class="form-check-label" for="esteve_internado_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="esteve_internado_sim" name="esteve_internado" value="Sim">
                                             <label class="form-check-label" for="esteve_internado_sim">Sim, motivo:</label>
                                             <input type="text" class="form-control" id="esteve_internado_motivo" name="esteve_internado_motivo">
                                          </div>
                                       </div>
                                       <!-- Seção 2: Sintomas -->
                                       <h5>Sintomas</h5>
                                       <div class="form-group">
                                          <label for="dor">Dor:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dor_nao" name="dor" value="Não" checked>
                                             <label class="form-check-label" for="dor_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dor_leve" name="dor" value="Leve">
                                             <label class="form-check-label" for="dor_leve">Leve</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dor_moderada" name="dor" value="Moderada">
                                             <label class="form-check-label" for="dor_moderada">Moderada</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dor_intensa" name="dor" value="Intensa">
                                             <label class="form-check-label" for="dor_intensa">Intensa</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="dispneia">Dispneia:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dispneia_nao" name="dispneia" value="Não" checked>
                                             <label class="form-check-label" for="dispneia_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dispneia_leve" name="dispneia" value="Leve">
                                             <label class="form-check-label" for="dispneia_leve">Leve</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dispneia_moderada" name="dispneia" value="Moderada">
                                             <label class="form-check-label" for="dispneia_moderada">Moderada</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="dispneia_intensa" name="dispneia" value="Intensa">
                                             <label class="form-check-label" for="dispneia_intensa">Intensa</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="sonolencia">Sonolência:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sonolencia_nao" name="sonolencia" value="Não" checked>
                                             <label class="form-check-label" for="sonolencia_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sonolencia_leve" name="sonolencia" value="Leve">
                                             <label class="form-check-label" for="sonolencia_leve">Leve</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sonolencia_moderada" name="sonolencia" value="Moderada">
                                             <label class="form-check-label" for="sonolencia_moderada">Moderada</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sonolencia_intensa" name="sonolencia" value="Intensa">
                                             <label class="form-check-label" for="sonolencia_intensa">Intensa</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="nauseas">Náuseas:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="nauseas_nao" name="nauseas" value="Não" checked>
                                             <label class="form-check-label" for="nauseas_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="nauseas_leve" name="nauseas" value="Leve">
                                             <label class="form-check-label" for="nauseas_leve">Leve</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="nauseas_moderada" name="nauseas" value="Moderada">
                                             <label class="form-check-label" for="nauseas_moderada">Moderada</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="nauseas_intensa" name="nauseas" value="Intensa">
                                             <label class="form-check-label" for="nauseas_intensa">Intensa</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="confusao_mental">Confusão mental:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="confusao_mental_nao" name="confusao_mental" value="Não" checked>
                                             <label class="form-check-label" for="confusao_mental_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="confusao_mental_sim" name="confusao_mental" value="Sim">
                                             <label class="form-check-label" for="confusao_mental_sim">Sim</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="vomito">Vômito:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="vomito_nao" name="vomito" value="Não" checked>
                                             <label class="form-check-label" for="vomito_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="vomito_sim" name="vomito" value="Sim">
                                             <label class="form-check-label" for="vomito_sim">Sim</label>
                                          </div>
                                       </div>
                                       <!-- Adicione os campos de sintomas conforme necessário -->
                                       <!-- Seção 3: Observações -->
                                       <h5>Observações</h5>
                                       <div class="form-group">
                                          <label for="observacoes">Observações:</label>
                                          <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                                       </div>
                                       <!-- Seção 4: Função Vesicointestinal -->
                                       <h5>Função Vesicointestinal</h5>
                                       <div class="form-group">
                                          <label for="diurese">Diurese:</label>
                                          <input type="text" class="form-control" id="diurese" name="diurese">
                                       </div>
                                       <div class="form-group">
                                          <label for="evacuacao">Evacuação:</label>
                                          <input type="text" class="form-control" id="evacuacao" name="evacuacao">
                                       </div>
                                       <div class="form-group">
                                          <label for="ferida">Possui alguma ferida?</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="ferida_nao" name="ferida" value="Não" checked>
                                             <label class="form-check-label" for="ferida_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="ferida_sim" name="ferida" value="Sim">
                                             <label class="form-check-label" for="ferida_sim">Sim</label>
                                          </div>
                                          <div class="form-group">
                                             <label for="local_ferida">Local:</label>
                                             <input type="text" class="form-control" id="local_ferida" name="local_ferida">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="sangramento">Algum episódio de sangramento?</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sangramento_nao" name="sangramento" value="Não" checked>
                                             <label class="form-check-label" for="sangramento_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="sangramento_sim" name="sangramento" value="Sim">
                                             <label class="form-check-label" for="sangramento_sim">Sim</label>
                                          </div>
                                          <div class="form-group">
                                             <label for="local_sangramento">Local:</label>
                                             <input type="text" class="form-control" id="local_sangramento" name="local_sangramento">
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="febre_respiratoria">Febre com sintomas respiratórios?</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="febre_respiratoria_nao" name="febre_respiratoria" value="Não" checked>
                                             <label class="form-check-label" for="febre_respiratoria_nao">Não</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="febre_respiratoria_sim" name="febre_respiratoria" value="Sim">
                                             <label class="form-check-label" for="febre_respiratoria_sim">Sim</label>
                                          </div>
                                       </div>
                                       <!-- Seção 4: Conduta/Orientação -->
                                       <h5>Conduta/Orientação</h5>
                                       <div class="form-group">
                                          <label for="contato_realizado_com">Contato telefônico realizado com:</label>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="contato_paciente" name="contato_realizado_com" value="Paciente" checked>
                                             <label class="form-check-label" for="contato_paciente">Paciente</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="radio" class="form-check-input" id="contato_familiar" name="contato_realizado_com" value="Familiar">
                                             <label class="form-check-label" for="contato_familiar">Familiar</label>
                                          </div>
                                       </div>
                                       <div class="form-group">
                                          <label for="conduta">Conduta:</label>
                                          <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="conduta_estavel" name="conduta_estavel" value="Paciente estável, ainda tem medicação no domicílio por mais dias. Reagendar próxima consulta.">
                                             <label class="form-check-label" for="conduta_estavel">Paciente estável, ainda tem medicação no domicílio por mais dias. Reagendar próxima consulta.</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="conduta_estavel_material_acabando" name="conduta_estavel_material_acabando" value="Paciente estável, porém a medicação/material para curativo no domicílio está acabando. Oriento a comparecer apenas o responsável ao ambulatório na data agendada.">
                                             <label class="form-check-label" for="conduta_estavel_material_acabando">Paciente estável, porém a medicação/material para curativo no domicílio está acabando. Oriento a comparecer apenas o responsável ao ambulatório na data agendada.</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="conduta_sintomas_descontrolados" name="conduta_sintomas_descontrolados" value="Paciente com alguns sintomas descontrolados, porém passível de fazer alteração na prescrição médica. Oriento a comparecer apenas o responsável.">
                                             <label class="form-check-label" for="conduta_sintomas_descontrolados">Paciente com alguns sintomas descontrolados, porém passível de fazer alteração na prescrição médica. Oriento a comparecer apenas o responsável.</label>
                                          </div>
                                          <div class="form-check">
                                             <input type="checkbox" class="form-check-input" id="conduta_necessidade_avaliacao_presencial" name="conduta_necessidade_avaliacao_presencial" value="Paciente com sintomas descontrolados/necessidade de avaliação presencial. Oriento a comparecer na consulta paciente e responsável.">
                                             <label class="form-check-label" for="conduta_necessidade_avaliacao_presencial">Paciente com sintomas descontrolados/necessidade de avaliação presencial. Oriento a comparecer na consulta paciente e responsável.</label>
                                          </div>
                                       </div>
                                       <!-- Adicione outras seções conforme necessário -->
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