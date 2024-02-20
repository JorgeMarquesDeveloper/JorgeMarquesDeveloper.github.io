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
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Editar dados cadastrados</div>
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
                                    
                                    <h5 class="mb-3  mb-1" style="color: #094c00;">Dados Pessoais</h5>
                                    
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                 </div>
                                 <!-- Área PHP Coluna 1 -->
                                 <form action="update_cad.php" method="post" enctype="multipart/form-data" id="myform">
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
                                    <hr class="my-4"style="color: #094c00;">
                                    <h5 class="mb-3">Endereço</h5>
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
                                       <div class="row">
                                          <div class="col-md-12">
                                             <label for="tempoServicoMilitar">Tempo de serviço militar:</label>
                                             <select class="form-control" id="tempoServicoMilitar" name="tempoServicoMilitar" required>
                                                <option value="0">Selecione ...</option>
                                                <option value="sim">Sim</option>
                                                <option value="nao">Não</option>
                                             </select>
                                          </div>
                                          <div id="camposAdicionais" style="display: none;">
                                             <div class="col-md-12"  >
                                                <label for="anosMilitar">Anos:</label>
                                                <select class="form-control" id="anosMilitar" name="anosMilitar" required>
                                                   <option value="0">Selecione quantos anos</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                   <!-- Adicione as opções para anos conforme necessário -->
                                                </select>
                                             </div>
                                             <div class="col-md-12"  >
                                                <label for="mesesMilitar">Meses:</label>
                                                <select class="form-control" id="mesesMilitar" name="mesesMilitar" required>
                                                   <option value="0">Selecione ...</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                   <!-- Adicione as opções para meses conforme necessário -->
                                                </select>
                                             </div>
                                             <div class="col-md-12" >
                                                <label for="diasMilitar">Dias:</label>
                                                <select class="form-control" id="diasMilitar" name="diasMilitar" required>
                                                   <option value="0">Selecione ...</option>
                                                   <option value="0">0</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
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
            <footer class="sticky-footer bg-white">
               <div class="container my-auto">
                  <div class="copyright text-center my-auto">
                     <span>SSMR/7ªRM - SisCTemp 2024</span>
                  </div>
                 
               </div>
            </footer>
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



<script>
         // Máscara para o campo de telefone
         document.getElementById('telefoneContato').addEventListener('input', function () {
             var phone = this.value.replace(/\D/g, ''); // Remover caracteres não numéricos
             if (phone.length > 11) {
                 phone = phone.slice(0, 11);
             }
         
             if (phone.length > 0) {
                 phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 7) + '-' + phone.substring(7, 11);
             }
         
             this.value = phone;
         });
         
         // Máscara para o campo de telefone de recados (opcional)
         document.getElementById('telefoneRecados').addEventListener('input', function () {
             var phone = this.value.replace(/\D/g, ''); // Remover caracteres não numéricos
             if (phone.length > 11) {
                 phone = phone.slice(0, 11);
             }
         
             if (phone.length > 0) {
                 phone = '(' + phone.substring(0, 2) + ') ' + phone.substring(2, 7) + '-' + phone.substring(7, 11);
             }
         
             this.value = phone;
         });
      </script>
      <script>
         // Função para aplicar a máscara de CPF
         function mascaraCPF(cpfInput) {
             // Remove caracteres não numéricos
             let cpf = cpfInput.value.replace(/\D/g, '');
           
             // Aplica a máscara
             if (cpf.length <= 11) {
                 cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                 cpfInput.value = cpf;
             }
         }
         
         // Adiciona um ouvinte de evento ao campo de CPF para chamar a função de máscara
         const cpfInput = document.getElementById('cpf');
         cpfInput.addEventListener('input', function () {
             mascaraCPF(cpfInput);
             validarCPF(cpfInput.value); // Chama a função de validação ao digitar
         });
         
         document.getElementById('myForm').addEventListener('submit', function (event) {
             // Impedir o envio do formulário para validar o CPF primeiro
             event.preventDefault();
             
             // Obter o valor do CPF
             var cpf = document.getElementById('cpf').value;
         
             // Validar o CPF
             if (validarCPF(cpf)) {
                 // Se o CPF for válido, envie o formulário
                 this.submit();
             } else {
                 // Se o CPF não for válido, exiba um alerta ou modal
                 alert('CPF inválido! Por favor, verifique.');
                 // Ou você pode exibir um modal ou mensagem de erro estilizado
             }
         });
         
         // Função para validar o CPF
         function validarCPF(cpf) {
             // Limpar a formatação do CPF
             cpf = cpf.replace(/[^\d]/g, '');
         
             // Verificar se o CPF tem 11 dígitos
             if (cpf.length !== 11) {
                 document.getElementById('cpf-feedback').innerText = 'CPF deve ter 11 dígitos.';
                 return false;
             }
         
             // Verificar se todos os dígitos são iguais
             if (/^(\d)\1{10}$/.test(cpf)) {
                 document.getElementById('cpf-feedback').innerText = 'CPF inválido (todos os dígitos são iguais).';
                 return false;
             }
         
             // Calcular os dígitos verificadores
             var calcDig = function (cpf, pos) {
                 var sum = cpf
                     .slice(0, pos)
                     .split('')
                     .map(function (d) {
                         return +d;
                     })
                     .reduce(function (acc, val, idx) {
                         return acc + val * (pos + 1 - idx);
                     }, 0);
         
                 var mod = sum % 11;
                 return mod < 2 ? 0 : 11 - mod;
             };
         
             var dig1 = calcDig(cpf, 9);
             var dig2 = calcDig(cpf, 10);
         
             // Verificar os dígitos verificadores
             if (cpf.slice(9) === dig1.toString() + dig2.toString()) {
                 document.getElementById('cpf-feedback').innerText = 'CPF válido.';
                 return true;
             } else {
                 document.getElementById('cpf-feedback').innerText = 'Dígitos verificadores do CPF não correspondem.';
                 return false;
             }
         }
      </script>
      <!-- Script responsavel por gerar endero apos CEP -->
      <script>
         function consultarCEP(cep) {
           document.getElementById('loading').style.display = 'inline'; // Mostrar o span de carregamento
           setTimeout(function () {
             fetch(`https://viacep.com.br/ws/${cep}/json/`)
               .then(response => response.json())
               .then(data => {
                 preencherCampos(data);
                 document.getElementById('loading').style.display = 'none'; // Esconder o span de carregamento
               })
               .catch(error => {
                 console.log('Erro ao consultar CEP:', error);
                 document.getElementById('loading').style.display = 'none'; // Esconder o span de carregamento em caso de erro
               });
           }, 2000); // Delay de 1 segundo (simulação)
         }
         
         function preencherCampos(data) {
           document.getElementById('logradouroInput').value = data.logradouro.toUpperCase();
           document.getElementById('bairroInput').value = data.bairro.toUpperCase();
           document.getElementById('cidadeInput').value = data.localidade.toUpperCase();
           document.getElementById('ufInput').value = data.uf.toUpperCase();
         }
         
         const cepInput = document.getElementById('cepInput');
         
         cepInput.addEventListener('input', function () {
           let cep = cepInput.value.replace(/\D/g, ''); // Remove não dígitos
           cep = cep.substring(0, 5) + '-' + cep.substring(5, 8); // Aplica máscara
         
           cepInput.value = cep.toUpperCase(); // Converte para maiúsculas
         
           if (cep.length === 9) {
             consultarCEP(cep);
           }
         });
      </script>
      <script>
         // Função para converter o texto em maiúsculas
         function toUpperCase() {
             var input = document.getElementById("nomeCompleto");
             input.value = input.value.toUpperCase();
         }
      </script>
      <script>
         const tempoServicoMilitarSelect = document.getElementById("tempoServicoMilitar");
         const camposAdicionaisDiv = document.getElementById("camposAdicionais");
         
         tempoServicoMilitarSelect.addEventListener("change", function () {
            if (tempoServicoMilitarSelect.value === "sim") {
            camposAdicionaisDiv.style.display = "block";
            } else {
            camposAdicionaisDiv.style.display = "none";
            }
         });
      </script>
      <script>
         document.getElementById('myForm').addEventListener('submit', function (event) {
             // Obter o valor do CPF
             var cpf = document.getElementById('cpf').value;
             // Validar o CPF
             if (!validarCPF(cpf)) {
                 // Se o CPF for inválido, exibir o pop-up e impedir o envio do formulário
                 event.preventDefault();
                 exibirPopup('CPF inválido. Por favor, verifique.', 'error-icon');
             }
         });
         
         function mascaraCPF(cpfInput) {
             let cpf = cpfInput.value.replace(/\D/g, '');
         
             if (cpf.length <= 11) {
                 cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                 cpfInput.value = cpf;
             }
         }
         
         function validarCPF(cpf) {
             cpf = cpf.replace(/[^\d]+/g, '');
         
             if (cpf === '' || cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
                 return false;
             }
         
             let result = 0;
             let factor = 10;
         
             for (let i = 0; i < 9; i++) {
                 result += parseInt(cpf.charAt(i)) * factor--;
             }
         
             let remainder = (result * 10) % 11;
         
             if (remainder === 10 || remainder === 11) {
                 remainder = 0;
             }
         
             if (remainder !== parseInt(cpf.charAt(9))) {
                 return false;
             }
         
             result = 0;
             factor = 11;
         
             for (let i = 0; i < 10; i++) {
                 result += parseInt(cpf.charAt(i)) * factor--;
             }
         
             remainder = (result * 10) % 11;
         
             if (remainder === 10 || remainder === 11) {
                 remainder = 0;
             }
         
             return remainder === parseInt(cpf.charAt(10));
         }
         
         function exibirPopup(message, icon) {
             document.getElementById('popup-message').innerHTML = `<i id="${icon}" class="${icon === 'error-icon' ? 'fas fa-times-circle' : ''}"></i> ${message}`;
             document.getElementById('popup').style.display = 'block';
         }
         
         function fecharPopup() {
             document.getElementById('popup').style.display = 'none';
         }
      </script>
 
      <script>
         // Seleciona o campo de nome completo
         const nomeCompletoField = document.getElementById('nomeCompleto');
         
         // Adiciona um ouvinte de evento de 'input' ao campo de nome completo
         nomeCompletoField.addEventListener('input', function () {
             const nomeCompletoValue = nomeCompletoField.value;
             const lettersOnlyValue = nomeCompletoValue.replace(/[^a-zA-ZÀ-ú\s]/g, '');
         
             if (nomeCompletoValue !== lettersOnlyValue) {
                 nomeCompletoField.value = lettersOnlyValue;
             }
         });
      </script>
<script>
    const localidadesSelect = document.getElementById('naturalidade');

    // Faz uma requisição à API do IBGE para obter a lista de estados
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
        .then(response => response.json())
        .then(estados => {
            estados.forEach(estado => {
                const optionEstado = document.createElement('option');
                optionEstado.value = estado.sigla;
                optionEstado.textContent = estado.nome;
                localidadesSelect.appendChild(optionEstado);
            });

            // Adiciona um evento para carregar cidades ao selecionar um estado
            localidadesSelect.addEventListener('change', () => {
                const estadoSelecionado = localidadesSelect.value;
                carregarCidadesPorEstado(estadoSelecionado);
            });
        })
        .catch(error => console.error('Erro ao carregar estados: ', error));

    // Função para carregar as cidades de um estado específico
    function carregarCidadesPorEstado(estado) {
        fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado}/municipios`)
            .then(response => response.json())
            .then(cidades => {
                const cidadesSelect = document.getElementById('localidades');
                cidadesSelect.innerHTML = ''; // Limpa as opções anteriores

                cidades.forEach(cidade => {
                    const optionCidade = document.createElement('option');
                    optionCidade.value = cidade.nome;
                    optionCidade.textContent = cidade.nome;
                    cidadesSelect.appendChild(optionCidade);
                });
            })
            .catch(error => console.error('Erro ao carregar cidades: ', error));
    }
</script>
   </body>
</html>