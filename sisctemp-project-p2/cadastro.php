<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #0a6300, #d2b000);
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .cadastro-box {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
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
</head>
<body>
<div class="logo"></div>
<div class="container cadastro-container mt-4 mb-4">
    

    <div class="col-md-12 cadastro-box">
        
        <div class="py-5 text-center">
               <img class=" mx-auto mb-4" src="logo.png" alt="" width="100" height="150">
               <h2 class="text-warning">Cadastro no Sistema </h2>
               <p class="lead">Preencha os campos abaixo com suas informações pessoais para criar sua conta.
               </p>
        </div>
        <div class="row-5">
            
                    <hr class="my-4">
                    <h5 class="mb-3">Dados pessoais</h5>
                    <form action="cadastro_processar.php" method="post">
                        <div class="form-group row">
                            
                            <div class="col-md-8">
                                <label for="nomeCompleto">Nome Completo:</label>
                                <input type="text" class="form-control" name="nomeCompleto" id="nomeCompleto" required oninput="toUpperCase()" placeholder="" value="" required>
                            </div>
                            <div class="col-md-4">
                                <label for="cpf">CPF:</label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="" maxlength="14" >
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
                            <button class="btn btn-success mt-3" type="submit">Cadastrar</button>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



<script>
         // Função para aplicar a máscara de telefone
         function mascaraTelefone(telefoneInput) {
           // Remove caracteres não numéricos
           let telefone = telefoneInput.value.replace(/\D/g, '');
         
           // Aplica a máscara
           if (telefone.length <= 11) {
             telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
             telefoneInput.value = telefone;
           }
         }
         
         // Adiciona um ouvinte de evento ao campo de telefone para chamar a função de máscara
         const telefoneInput = document.getElementById('telefone');
         telefoneInput.addEventListener('input', function () {
           mascaraTelefone(telefoneInput);
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
         });
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
         let previousCPF = ''; // Variável para armazenar o CPF anterior

            document.getElementById('cpf').addEventListener('blur', function() {
               const cpfInput = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos do input
               previousCPF = cpfInput;
            });


         document.getElementById('cpf').addEventListener('blur', function() {
            const cpfInput = this.value.replace(/\D/g, ''); // Remove caracteres não numéricos do input
            const cpfFeedback = document.getElementById('cpf-feedback');
           
            
            if (cpfInput.length === 11) { // Verifica se o CPF tem 11 dígitos
               if (isValidCPF(cpfInput)) {
                     cpfFeedback.style.display = 'block';
                     //cpfFeedback.style.bgcolor = 'green';
                     cpfInput.style.color = 'green';
                     cpfFeedback.textContent = 'CPF digitado é Válido '; // CPF válido, esconde a mensagem de feedback
               } else {
                  cpfFeedback.style.display = 'block';
                  cpfFeedback.textContent = 'CPF digitado não é Válido '; // CPF inválido, exibe a mensagem de feedback
               }
            } else {
               cpfFeedback.style.display = 'none'; // Não tem 11 dígitos, esconde a mensagem de feedback
            }
         });

         function isValidCPF(cpf) {
            // Remove caracteres não numéricos e verifica se há 11 dígitos
            if (cpf.length !== 11) {
               return false;
            }

            // Verifica se todos os dígitos são iguais, o que é inválido
            if (/^(\d)\1{10}$/.test(cpf)) {
               return false;
            }

            // Calcula e compara os dígitos verificadores
            let sum = 0;
            for (let i = 0; i < 9; i++) {
               sum += parseInt(cpf.charAt(i)) * (10 - i);
            }
            let remainder = sum % 11;
            let firstVerifier = (remainder < 2) ? 0 : 11 - remainder;

            sum = 0;
            for (let i = 0; i < 10; i++) {
               sum += parseInt(cpf.charAt(i)) * (11 - i);
            }
            remainder = sum % 11;
            let secondVerifier = (remainder < 2) ? 0 : 11 - remainder;

            // Compara os dígitos verificadores calculados com os fornecidos
            return firstVerifier === parseInt(cpf.charAt(9)) && secondVerifier === parseInt(cpf.charAt(10));
         }
         </script>

 <script>
        // Seleciona todos os campos de entrada que são obrigatórios (com o atributo 'required')
     /*const requiredFields = document.querySelectorAll('input[required], select[required]');

        // Adiciona um ouvinte de evento de 'input' a cada campo de entrada
        requiredFields.forEach(field => {
            field.addEventListener('input', validateForm);
        });

        function validateForm() {
            let isValid = true;

            // Verifica se cada campo obrigatório está preenchido
            requiredFields.forEach(field => {
                if (!field.value) {
                    isValid = false;
                }
            });

            // Ativa ou desativa o botão de envio com base na validação
            const submitButton = document.getElementById('submit-button');
            if (isValid) {
                submitButton.removeAttribute('disabled');
            } else {
                submitButton.setAttribute('disabled', 'true');
            }
        }*/
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
        const naturalidadeSelect = document.getElementById('naturalidade');

        // Faz uma requisição à API do IBGE para obter a lista de cidades
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/municipios')
            .then(response => response.json())
            .then(data => {
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.nome;
                    option.textContent = city.nome;
                    naturalidadeSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Erro ao carregar cidades: ', error));
    </script>
</body>
</html>
