<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR |Relatorio Individual </title>
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
                        <div class="card border-left-info shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Relatório individual </div>
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
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card shadow h-100 py-2">
                              <div class="card-body">
                                 <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                       <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                          Informações Gerais
                                       </div>
                                       <form action="relatorio_indv_01.php" method="post">
                                          <div class="form-group">
                                             <label for="pacienteId">ID do Paciente:</label>
                                             <input type="text" class="form-control" id="pacienteId" name="pacienteId">
                                          </div>
                                          <button type="submit" class="btn btn-success">Enviar</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Socio Demografico
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php
                                          $id = 0;
                                          $sql ="";
                                          $result="";
                                             // Substitua as informações de conexão conforme necessário
                                             require('db.php'); 
                                             
                                             // Verificar se um ID foi enviado via POST
                                             if (isset($_POST['pacienteId'])) {
                                                 $id = $_POST['pacienteId'];
                                             
                                                 // Conectar ao banco de dados
                                                 $conn = new mysqli($servername, $username, $password, $dbname);
                                             
                                                
                                             
                                                 // Consulta SQL para recuperar dados específicos do ID
                                                 $sql = "SELECT * FROM formulario WHERE id = $id";
                                                 $result = $conn->query($sql);
                                             
                                                 // Verificar se há resultados
                                                 if ($result->num_rows > 0) {
                                                     // Exibir o formato desejado
                                                     $row = $result->fetch_assoc();
                                             
                                                     // Exibir respostas
                                                     echo "<p>Nome: " . $row['nome'] . "</p>";
                                                     echo "<p>Idade: " . $row['idade'] . "</p>";
                                                     echo "<p>Sexo: " . $row['sexo'] . "</p>";
                                                     echo "<p>Escolaridade: " . $row['escolaridade'] . "</p>";
                                                     echo "<p>Renda: " . $row['renda'] . "</p>";
                                                     echo "<p>Procedência: " . $row['procedencia'] . "</p>";
                                                     echo "<p>Tempo de Deslocamento: " . $row['tempo_deslocamento'] . "</p>";
                                                     echo "<p>Tipo de Transporte: " . $row['tipo_transporte'] . "</p>";
                                                     echo "<p>Passagem, Estadia, Refeição: " . $row['passagem_estadia_refeicao'] . "</p>";
                                                     echo "<p>Cuidador: " . $row['cuidador'] . "</p>";
                                                     echo "<p>Força Motora: " . $row['forca_motora'] . "</p>";
                                             
                                                     // Adicione mais campos conforme necessário
                                             
                                                     echo "<hr>"; // Adicionar uma linha divisória entre os conjuntos de respostas
                                                 } else {
                                                   echo "ID não fornecido.";                                                 }
                                             
                                                 // Fechar a conexão com o banco de dados
                                             } else {
                                                 echo "ID não fornecido.";
                                             }
                                             ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
ficha 02                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php
                                          // Substitua as informações de conexão conforme necessário
                                          
                                          
                                          // Conectar ao banco de dados
                                          
                                          
                                          // Verificar a conexão
                                          
                                          
                                         
                                          $sql = "SELECT * FROM ficha_teleatendimento WHERE id = $id";
                                          $result = $conn->query($sql);
                                          
                                          // Verificar se há resultados
                                          if ($result->num_rows > 0) {
                                             // Exibir os resultados
                                          
                                             while ($row = $result->fetch_assoc()) {
                                                echo "<p>Data da última consulta: " . $row['data_ultima_consulta'] . "</p>";
                                                echo "<p>KPS da última consulta: " . $row['kps_ultima_consulta'] . "</p>";
                                                echo "<p>KPS telefônico: " . $row['kps_telefonico'] . "</p>";
                                                echo "<p>Alteração significativa: " . $row['alteracao_significativa'] . "</p>";
                                                echo "<p>Descrição da alteração significativa: " . $row['alteracao_significativa_descricao'] . "</p>";
                                                echo "<p>Esteve SPA: " . $row['esteve_spa'] . "</p>";
                                                echo "<p>Motivo do SPA: " . $row['esteve_spa_motivo'] . "</p>";
                                                echo "<p>Esteve internado: " . $row['esteve_internado'] . "</p>";
                                                echo "<p>Motivo da internação: " . $row['esteve_internado_motivo'] . "</p>";
                                                echo "<p>Dor: " . $row['dor'] . "</p>";
                                                echo "<p>Dispneia: " . $row['dispneia'] . "</p>";
                                                echo "<p>Sonolência: " . $row['sonolencia'] . "</p>";
                                                echo "<p>Náuseas: " . $row['nauseas'] . "</p>";
                                                echo "<p>Confusão mental: " . $row['confusao_mental'] . "</p>";
                                                echo "<p>Vômito: " . $row['vomito'] . "</p>";
                                                echo "<p>Observações: " . $row['observacoes'] . "</p>";
                                                echo "<p>Diurese: " . $row['diurese'] . "</p>";
                                                echo "<p>Evacuação: " . $row['evacuacao'] . "</p>";
                                                echo "<p>Ferida: " . $row['ferida'] . "</p>";
                                                echo "<p>Local da ferida: " . $row['local_ferida'] . "</p>";
                                                echo "<p>Sangramento: " . $row['sangramento'] . "</p>";
                                                echo "<p>Local do sangramento: " . $row['local_sangramento'] . "</p>";
                                                echo "<p>Febre respiratória: " . $row['febre_respiratoria'] . "</p>";
                                                echo "<p>Contato realizado com: " . $row['contato_realizado_com'] . "</p>";
                                                echo "<p>Conduta estável: " . $row['conduta_estavel'] . "</p>";
                                                echo "<p>Material da conduta está acabando: " . $row['conduta_estavel_material_acabando'] . "</p>";
                                                echo "<p>Sintomas descontrolados: " . $row['conduta_sintomas_descontrolados'] . "</p>";
                                                echo "<p>Necessidade avaliação presencial: " . $row['conduta_necessidade_avaliacao_presencial'] . "</p>";
                                          
                                                echo "<hr>"; // Adicionar uma linha divisória entre os conjuntos de resultados
                                             }
                                          } else {
                                             echo "ID não fornecido.";                                          }
                                          
                                          // Fechar a conexão com o banco de dados
                                          
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Ficha 03                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                       <?php
                                          // Substitua as informações de conexão conforme necessário
                                          $sql = "SELECT * FROM ficha_03 WHERE id = $id";
                                          $result = $conn->query($sql);
                                          
                                          if ($result->num_rows > 0) {
                                             // Exibir os resultados
                                          
                                             while ($row = $result->fetch_assoc()) {
                                                 // Exibir os dados conforme necessário
                                                 echo "ID: " . $row['id'] . "<br>";
                                                 echo "Dor: " . $row['dor'] . "<br>";
                                                 echo "Cansaço: " . $row['cansaco'] . "<br>";
                                                 echo "Sonolência: " . $row['sonolencia'] . "<br>";
                                                 echo "Náusea: " . $row['nausea'] . "<br>";
                                                 echo "Falta de Apetite: " . $row['falta_apetite'] . "<br>";
                                                 echo "Falta de Ar: " . $row['falta_ar'] . "<br>";
                                                 echo "Depressão: " . $row['depressao'] . "<br>";
                                                 echo "Ansiedade: " . $row['ansiedade'] . "<br>";
                                                 echo "Bem-Estar: " . $row['bem_estar'] . "<br>";
                                                 echo "Outro Problema: " . $row['outro_problema'] . "<br>";
                                          
                                                 echo "<hr>"; // Adicionar uma linha divisória entre os conjuntos de resultados
                                             }
                                          } 
                                          else {
                                             echo "ID não fornecido.";                                          }
                                          
                                          
                                          
                                          ?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Ficha 04
                    </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?php
                        // Substitua as informações de conexão conforme necessário
                        $sql = "SELECT * FROM ficha_04 WHERE id = $id";
                        $result = $conn->query($sql);

                        // Verificar se há resultados
                        if ($result->num_rows > 0) {
                            // Exibir os resultados
                            echo "<h2 class='mb-3'>Dados da Ficha 04</h2>";

                            while ($row = $result->fetch_assoc()) {
                                // Exibir os dados conforme necessário
                                echo "<p class='mb-1'><strong>ID:</strong> " . $row['id'] . "</p>";
                                echo "<p class='mb-1'><strong>Iniciais:</strong> " . $row['iniciais'] . "</p>";
                                echo "<p class='mb-1'><strong>Data de Nascimento:</strong> " . $row['data_nascimento'] . "</p>";
                                echo "<p class='mb-1'><strong>Data de Hoje:</strong> " . $row['data_hoje'] . "</p>";

                                // Exibir respostas para as perguntas
                                echo "<h5 class='mt-3 mb-2'>Respostas para Perguntas</h5>";
                                for ($i = 1; $i <= 13; $i++) {
                                    echo "<p class='mb-1'><strong>Pergunta $i:</strong> " . $row['pergunta' . $i] . "</p>";
                                }

                                echo "<hr>"; // Adicionar uma linha divisória entre os conjuntos de resultados
                            }
                        } else {
                            echo "<p class='text-danger'>ID não fornecido.</p>";
                        }

                        // Não fechar a conexão aqui
                        // Fechar a conexão com o banco de dados fora do bloco acima
                        $conn->close();
                        ?>
                    </div>
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