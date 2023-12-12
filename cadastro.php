<!DOCTYPE html>
<html>
   <head>
      <link rel="icon" type="image/png" href="img/favicon.ico">
      <title>Cadastro</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <style>
         body {
         background: url('img/back-ground.jpg') no-repeat center center fixed;
         display: flex;
         justify-content: center;
         align-items: center;
         }
         .cadastro-box {
         background-color: rgba(255, 255, 255,10); 
         border: 1px solid #ddd;
         padding: 20px;
         border-radius: 20px;
         box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
         text-align: ; /* Centralizar conteúdo do cadastro-box */
         width: 100%; /* Defina a largura do contêiner do formulário */
         }
         .logo-container {
         text-align: center;
         }
         .logo {
         max-width: 70px;
         }
         .footer {
         text-align: center;
         }
      </style>

        <style>
                #popup {
                    display: none;
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    padding: 20px;
                    background-color: #f8d7da;
                    border: 1px solid #f5c6cb;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                    z-index: 1000;
                    text-align: center;
                }

                #error-icon {
                    color: #dc3545;
                    font-size: 24px;
                }

                #popup button {
                    background-color: #fff;
                    border: none;
                    padding: 8px 12px;
                    cursor: pointer;
                    border-radius: 3px;
                }
            </style>     
   </head>
   <body>
      <div class="logo"></div>
      <div class="container cadastro-container mt-4 mb-4">
         <div class="col-md-12 cadastro-box">
            <div class="py-5 text-center">
               <img class=" mx-auto mb-4" src="img/logo.png" alt="" width="100" height="150">
               <h2 class="" style="color: #094c00;">Cadastro no Sistema </h2>
               <p class="lead">Preencha os campos abaixo com suas informações pessoais para criar sua conta.
               </p>
            </div>
            <div class="row-5">
               <hr class="my-4">
               <h5 class="mb-3">Dados pessoais</h5>
               <form action="cadastro_processar.php" method="post"  enctype="multipart/form-data" id="myform">
                  <div class="form-group row">
                     <div class="col-md-8">
                        <label for="nomeCompleto">Nome Completo:</label>
                        <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" required oninput="toUpperCase()" placeholder="" value="" required>
                     </div>
                     <div class="col-md-4">
                        <label for="cpf">CPF:</label>
                        <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Digite seu CPF" maxlength="14">
                        <div id="popup">
                            <p id="popup-message"></p>
                            <button onclick="fecharPopup()">Fechar</button>
                        </div>
                        <p id="cpf-feedback" style="color: red;"></p> <!-- Adicione este elemento de feedback -->
                    </div>
                     <div class="col-md-4">
                        <label for="identidadeOrgaoExp">Identidade/Orgão Exp.:</label>
                        <input type="text" class="form-control" id="identidadeOrgaoExp" name="identidadeOrgaoExp" required>
                     </div>
                     <div class="col-md-4">
                        <label for="nacionalidade">Nacionalidade:</label>
                        <select class="form-control" id="nacionalidade" name="nacionalidade" required>
                           <option value="">Selecione ...</option>
                           <option value="Brasileiro">Brasileiro</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label for="sexo">Sexo:</label>
                        <select class="form-control" id="sexo" name="sexo" required>
                           <option value="">Selecione ...</option>
                           <option value="Masculino">Masculino</option>
                           <option value="Feminino">Feminino</option>
                           <option value="Outro">Outro</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label for="estadoCivil">Estado Civil:</label>
                        <select class="form-control" id="estadoCivil" name="estadoCivil" required>
                           <option value="">Selecione ...</option>
                           <option value="Casado(a)">Casado(a)</option>
                           <option value="Solteiro(a)">Solteiro(a)</option>
                           <option value="União Estável">União Estável</option>
                           <option value="Viúvo(a)">Viúvo(a)</option>
                           <option value="Outro">Outro</option>
                        </select>
                     </div>
                     <div class="col-md-8">
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
                     <div class="col-md-4">
                        <label for="dataNascimento">Data de Nascimento:</label>
                        <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" required>
                     </div>
                     <div class="col-md-4">
                        <label for="numDependentes">Dependentes:</label>
                        <select class="form-control" id="numDependentes" name="numDependentes" required>
                           <option value="0">Não possuo dependentes</option>
                           <option value="1">Possuo 1 dependente</option>
                           <option value="2">Possuo 2 dependentes</option>
                           <option value="3">Possuo 3 dependentes</option>
                           <option value="4">Possuo 4 dependentes</option>
                           <option value="5">Possuo 5 dependentes</option>
                           <option value="6">Possuo 6 dependentes</option>
                           <option value="7">Possuo 7 dependentes</option>
                           <option value="8">Possuo 8 dependentes</option>
                        </select>
                     </div>
                     <div class="col-md-4">
                        <label for="nomeSocial">Nome Social (Opcional):</label>
                        <input type="text" class="form-control" id="nomeSocial" name="nomeSocial">
                     </div>
                  </div>
                  <hr class="my-4">
                  <h5 class="mb-3">Dados pessoais</h5>
                  <div class="form-group row">
                     <div class="col-md-4">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" name="cep" id="cepInput" placeholder="" required>
                        <div id="loading" style="display: none;">
                           <img src="loading.gif" alt="Carregando..." class="img-fluid">
                           <p>Consultando CEP...</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" name="estado" id="ufInput" placeholder="" required>
                     </div>
                     <div class="col-md-4">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" name="cidade" id="cidadeInput" placeholder="" required>
                     </div>
                     <div class="col-md-4">
                        <label for="logradouro">Logradouro:</label>
                        <input type="text" class="form-control" name="logradouro" id="logradouroInput" placeholder="">
                     </div>
                     <div class="col-md-8">
                        <label for="bairro">Bairro:</label>
                        <input type="text" class="form-control" name="bairro" id="bairroInput" placeholder="">
                     </div>
                  </div>
                  <hr class="my-4">
                  <h5 class="mb-3 text-warning">Contatos</h5>
                  <div class="form-group row">
                     <div class="col-md-4">
                        <label for="email">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                     </div>
                     <div class="col-md-4">
                        <label for="telefoneContato">Telefone para Contato:</label>
                        <input type="text" class="form-control" id="telefoneContato" name="telefoneContato" required>
                     </div>
                     <div class="col-md-4">
                        <label for="telefoneRecados">Telefone para Recados (Opcional):</label>
                        <input type="text" class="form-control" id="telefoneRecados" name="telefoneRecados">
                     </div>
                     <div class="col-md-12">
                        <label for="foto">Foto (Obrigatorio):</label>
                        <input type="file"class="form-control" name="imagem" id="imagem" accept="image/*" required>
                     </div>
                  </div>
                  <hr class="my-4">
                  <h5 class="mb-3 text-warning">Serviço Militar anterior</h5>
                  <div class="form-group row">
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
                  <h5 class="mb-3">Informação para Log-in</h5>
                  <div class="form-group row">
                     <!-- Adicione o campo de senha -->
                     <div class="col-md-6">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                     </div>
                     <div class="col-md-6">
                        <label for="senha">Confirme a Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                     </div>
                  </div>
                  <div class="d-grid gap-2">
                     <button class="btn  mt-3" style="background-color: #094c00; color:white;" type="submit">Cadastrar</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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