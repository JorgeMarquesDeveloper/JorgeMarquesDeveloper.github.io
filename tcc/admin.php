<!-- Codigo PHP-->


<?php
   require('db.php'); 
   
 
   $sql = "SELECT COUNT(*) as total_cadastros FROM ficha_01";
   
   $resultado = $conn->query($sql);
   
   if ($resultado) {
       // Obtém o resultado da contagem
       $dados = $resultado->fetch_assoc();
       $total_cadastros = $dados['total_cadastros'];
   } else {
       $total_cadastros = "Erro na consulta: " . $conn->error;
   }
   
   $conn->close();
   ?>
<?php
   require('db.php'); 
   
   // Verifica se a tabela existe
   
   
   // Consulta SQL para contar pessoas em cada faixa etária
   $sql_contagem = "SELECT
       SUM(CASE WHEN idade = '18-29' THEN 1 ELSE 0 END) AS faixa_18_29,
       SUM(CASE WHEN idade = '30-49' THEN 1 ELSE 0 END) AS faixa_30_49,
       SUM(CASE WHEN idade = '50-59' THEN 1 ELSE 0 END) AS faixa_50_59,
       SUM(CASE WHEN idade = '60-79' THEN 1 ELSE 0 END) AS faixa_60_79,
       SUM(CASE WHEN idade = '80-mais' THEN 1 ELSE 0 END) AS faixa_80_mais
       FROM ficha_01";
   
   // Executa a consulta
   $resultado_contagem = $conn->query($sql_contagem);
   
   if ($resultado_contagem !== false) {
       // Obtém o resultado da contagem
       $linha_contagem = $resultado_contagem->fetch_assoc();
   
       // Atualiza a tabela grafic_idade_pess
       
          $faixaEtaria18_29 = $linha_contagem['faixa_18_29'];
          $faixaEtaria30_49 = $linha_contagem['faixa_30_49'];
          $faixaEtaria50_59 = $linha_contagem['faixa_50_59'];
          $faixaEtaria60_79 = $linha_contagem['faixa_60_79'];
          $faixaEtaria80_mais =$linha_contagem['faixa_80_mais'];
   
       // Executa a atualização
      
   
   } else {
       echo "Erro na contagem: " . $conn->error;
   }
   
   // Fecha a conexão com o banco de dados após a atualização
   $conn->close();
   ?>




<?php
require('db.php'); 

// Consulta SQL para contar o número de registros para cada gênero
$sql_contagem_genero = "SELECT 
    SUM(CASE WHEN sexo = 'Masculino' THEN 1 ELSE 0 END) AS total_masculino,
    SUM(CASE WHEN sexo = 'Feminino' THEN 1 ELSE 0 END) AS total_feminino
    FROM ficha_01";

// Executa a consulta
$resultado_contagem_genero = $conn->query($sql_contagem_genero);

if ($resultado_contagem_genero !== false) {
    // Obtém o resultado da contagem
    $linha_contagem_genero = $resultado_contagem_genero->fetch_assoc();

    // Armazena os resultados nas variáveis PHP
    $total_masculino = (int)$linha_contagem_genero['total_masculino'];
    $total_feminino = (int)$linha_contagem_genero['total_feminino'];

  
} else {
    echo "Erro na contagem de gênero: " . $conn->error;
}

$conn->close();
?>















































<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR | Admin</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <style>
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
      <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #65b22e;">
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
            <span>Minhas Fichas</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            <!-- Content Row -->
            <div class="row">
               <!-- Earnings (Monthly) Card Example -->
               <div class="col-xl-3 col-md-12 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Pacientes Cadastrados
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_cadastros; ?></div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-12 mb-4">
                  <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                 Pacientes 
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_cadastros; ?></div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-12 mb-4">
                  <div class="card border-left-danger shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                 Novidades
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_cadastros; ?></div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body">
                        <div class="row no-gutters align-items-center">
                           <div class="col mr-2">
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                 Hora Atual
                              </div>
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                              <div id="relogio"></div>
                              </div>
                           </div>
                           <div class="col-auto">
                              <i class="fas fa-calendar fa-2x text-gray-300"></i>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-7 col-lg-7">
                  <!-- Área do Gráfico -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-warning">Faixas Etárias da Pesquisa</h6>
                     </div>
                     <div class="card-body">
                        <canvas id="gap_01"></canvas>
                     </div>
                  </div>
               </div>
               <div class="col-xl-5 col-lg-7">
                  <!-- Área do Gráfico -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-warning">Generos </h6>
                     </div>
                     <div class="card-body">
                        <canvas id="gap_02"></canvas>
                     </div>
                  </div>
               </div>
            </div>
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
      <!-- Page level custom scripts -->
      <script>
         // Configurações do gráfico
         var config = {
             type: 'bar',
             data: {
                 labels: ['18-29', '30-49', '50-59', '60-79', '80-mais'],
                 datasets: [{
                     label: 'Quantidade de Pessoas por Faixa Etária',
                     data: [<?php echo $faixaEtaria18_29; ?>, <?php echo $faixaEtaria30_49; ?>, <?php echo $faixaEtaria50_59; ?>, <?php echo $faixaEtaria60_79; ?>, <?php echo $faixaEtaria80_mais; ?>],
                     backgroundColor: 'rgba(101,178,46, 0.5)',
                     borderColor: 'rgba(101,178,46, 1)',
                     borderWidth: 1
                 }]
             },
             options: {
                 scales: {
                     y: {
                         beginAtZero: false
                     }
                 }
             }
         };
         
         // Obtém o contexto do canvas
         var ctx = document.getElementById('gap_01').getContext('2d');
         
         // Cria o gráfico
         var myChart = new Chart(ctx, config);
      </script>

<script>
    // Configurações do gráfico de pizza para gênero
    var genderConfig = {
        type: 'doughnut',
        data: {
            labels: ['Masculino', 'Feminino'],
            datasets: [{
                data: [<?php echo $total_masculino; ?>, <?php echo $total_feminino; ?>],
                backgroundColor: ['rgba(101,178,46, 0.5)', 'rgba(255, 0, 0, 0.5)'],
                borderColor: ['rgba(101,178,46, 1)', 'rgba(255, 0, 0, 1)'],
                borderWidth: 1
            }]
        },
        options: {}
    };

    // Obtém o contexto do canvas para o gráfico de gênero
    var genderCtx = document.getElementById('gap_02').getContext('2d');

    // Cria o gráfico de pizza para gênero
    var genderChart = new Chart(genderCtx, genderConfig);
</script>




































































<script>
function atualizarRelogio() {
    var agora = new Date();
    var horas = agora.getHours();
    var minutos = agora.getMinutes();
    var segundos = agora.getSeconds();

    horas = formatarNumero(horas);
    minutos = formatarNumero(minutos);
    segundos = formatarNumero(segundos);

    var horaAtual = horas + ":" + minutos + ":" + segundos;

    document.getElementById("relogio").innerHTML = horaAtual;
}

function formatarNumero(numero) {
    return numero < 10 ? "0" + numero : numero;
}

// Atualiza o relógio a cada segundo
setInterval(atualizarRelogio, 1000);

// Chama a função inicialmente para exibir o horário imediatamente
atualizarRelogio();
</script>









   </body>
</html>