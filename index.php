<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SisCTemp | Log-in</title>
    <link rel="icon" type="image/x-icon" href="" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
        rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="styles-index/css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Background Video-->
    <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="media/vd/mp4/bg-video.mp4" type="video/mp4" />
    </video>
    <!-- Masthead-->
    <div class="masthead">
        <form action="loginFuncionarioEntrar.php" method="post">
            <div class="col-12 my-auto">
                <div class="masthead-content text-dark py-5 py-md-0">
                    <br>
                    <br>
                    <h1 class="mb-3 my-2 text-white">SisCTemp</h1>
                    <p class="mb-4 text-white">Sistema de Cadastramento de Militares Temporários.
                    <div class="input-group input-group-newsletter">
                        <input name="email" type="email" id="cpfInput" maxlength="14"class="form-control" placeholder="Insira seu CPF ..."
                            aria-label="Enter email..." aria-describedby="basic-addon">
                    </div>
                </div>
                <div class="masthead-content text-white py-5 py-md-1">
                    <div class="input-group input-group-newsletter">
                        <input name="senha" type="password" class="form-control" placeholder="Insira sua senha ..."
                            aria-label="Insira sua Senha .." aria-describedby="basic-addon">
                    </div>
                    <div class="d-grid gap-2 y py-md-1">
                        <button class="btn btn-warning" type="submit">   Log-in   </button>
                        <a class="btn btn-outline-primary" role="button" href="pages/cad-pag/cadastro_candidato.php">Cadastra-se</a>
                        <a class="btn btn-outline-success col-20 " role="button" >Esqueceu a senha ?</a>
                      </div>
                    
                 
                                      
                </div>  
                              
            </div>
            
    </div>
    </form>
    </div>
    </div>
    </div>
    <!-- Social Icons-->
    <!-- For more icon options, visit https://fontawesome.com/icons?d=gallery&p=2&s=brands-->

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <script>
        // Função para aplicar a máscara ao CPF
        function formatCPF(cpf) {
            cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4'); // Aplica a máscara
            return cpf;
        }

        // Adiciona um ouvinte de eventos ao campo de entrada
        const cpfInput = document.getElementById('cpfInput');
        cpfInput.addEventListener('input', function () {
            this.value = formatCPF(this.value);
        });
    </script>
</body>

</html>