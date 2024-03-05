<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>TCR | Pesquisar Paciente</title>
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
                  </div>
                  <!-- Content Row -->
                  <div class="row">
                     <!-- Earnings (Monthly) Card Example -->
                     <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Pesquisar Pacientes
                                    </div>
                                    <form action="" method="POST">
                                       <div class="form-group">
                                          <label for="search_term">Digite o nome para buscar:</label>
                                          <input type="text" class="form-control" id="search_term" name="search_term" required>
                                       </div>
                                       <button type="submit" class="btn btn-success">Buscar</button>
                                    </form>
                                    <form action="" method="POST">
                                       <div class="form-group">
                                          
                                          <input type="hidden" class="form-control" id="search_term" name="search_term" value="" >
                                       </div>
                                       <button type="submit" class="btn btn-success">Todos os Cadastrados</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-12 col-md-12 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                           <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                 <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                       Resultado da pesquisa
                                    </div>
                                    <?php
require('db.php'); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $search_term = mysqli_real_escape_string($conn, $_POST["search_term"]);

    // Consulta SQL modificada para verificar pendências em diferentes tabelas
    $sql = "
        SELECT 
            f1.id, f1.nome,
            CASE WHEN f2.id IS NOT NULL THEN 'Realizada' ELSE 'Pendente' END AS tem_pendencias_ficha_04,
            CASE WHEN f3.id IS NOT NULL THEN 'Realizada' ELSE 'Pendente' END AS tem_pendencias_ficha_03,
            CASE WHEN ft.id IS NOT NULL THEN 'Realizada' ELSE 'Pendente' END AS tem_pendencias_ficha_teleatendimento
        FROM ficha_01 f1
        LEFT JOIN ficha_04 f2 ON f1.id = f2.id
        LEFT JOIN ficha_03 f3 ON f1.id = f3.id
        LEFT JOIN ficha_teleatendimento ft ON f1.id = ft.id
        WHERE f1.nome LIKE '%$search_term%'
    ";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered text-center' >";
        echo "<tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Avaliação de Edmonton</th>
            <th>Avaliação da Teleconsulta</th>
            <th>Teleatendimento</th>
            <th>Status </th>
            <th>Excluir Ficha</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nome"] . "</td>";

          

            // Link para resolver pendência na Ficha 03
            echo "<td>";
            if ($row["tem_pendencias_ficha_03"] == 'Pendente') {
                echo "<a href='ficha_03.php' class='btn btn-warning btn-sm'>Pendente</a>";
            } else {
               echo "<i class='fas fa-thumbs-up text-success'></i>
               <a href='ficha_03_excluir.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>
               <i class='fas fa-trash-alt'></i> 
           </a>
               
               
               "
               
               
               
               ;
            }
            echo "</td>";

            // Link para resolver pendência na Ficha 04
            echo "<td>";
            if ($row["tem_pendencias_ficha_04"] == 'Pendente') {
               echo "<a href='ficha_04.php' class='btn btn-warning btn-sm'>Pendente</a>";            } else {
                  echo "<i class='fas fa-thumbs-up text-success'></i>
                  <a href='ficha_04_excluir.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>
                  <i class='fas fa-trash-alt'></i> 
              </a>
                  
                  
                  "
                  
                  
                  
                  ;

            }
            echo "</td>";

            // Link para resolver pendência na Ficha de Teleatendimento
            echo "<td>";
            if ($row["tem_pendencias_ficha_teleatendimento"] == 'Pendente') {
               echo "<a href='ficha_02.php' class='btn btn-warning btn-sm'>Pendente</a>";            } else {
                  echo "<i class='fas fa-thumbs-up text-success'></i>
                  <a href='ficha_02_excluir.php?id=" . $row["id"] . "' class='btn btn-danger btn-sm'>
                  <i class='fas fa-trash-alt'></i> 
              </a>
                  
                  
                  "
                  
                  
                  
                  ;
                  
               }
            echo "</td>";

            // Adicione a coluna para o status de pendência
            $statusPendencia = ($row["tem_pendencias_ficha_04"] == 'Pendente' || $row["tem_pendencias_ficha_03"] == 'Pendente' || $row["tem_pendencias_ficha_teleatendimento"] == 'Pendente' ? 'Pendente' : "<i class='fas fa-thumbs-up text-success'></i>");
            echo "<td>$statusPendencia</td>";              


            // Botões para excluir uma ficha específica
            echo "<td><form action='excluir_fichas_total.php' method='post'><input type='hidden' name='id' value='" . $row["id"] . "'><button type='submit' class='btn btn-danger btn-sm'>Excluir Ficha</button></form></td>";

            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p>Nenhum resultado encontrado.</p>";
    }
}

$conn->close();
?>


                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- Resultados da Busca -->
               </div>
            </div>
         <!-- Content Row -->
      <!-- /.container-fluid -->
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