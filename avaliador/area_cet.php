<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Área CET - Notas</title>
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Cabo Especialista Temporário</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="area_ott.php">OTT</a></li>
                <li class="nav-item"><a class="nav-link" href="area_stt.php">STT</a></li>
                <li class="nav-item"><a class="nav-link" href="area_cet.php">CET</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">INICIO</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="bg-custom-color bg-success text-white">

    <div class="container px-4 text-left">
        <h1 class="fw-bolder">Anotaçãoes referentes ao cargo de Cabo ET</h1>
        <p class="lead">Insira uma nova anotação!</p>
        <form action="adicionar_nota.php" method="post" class="mt-3">
    <div class="form-group">
        <label for="titulo">Título:</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
        <input type="hidden" name="area" value="CET">
    </div>
    <div class="form-group">
        <label for="tipo-anotacao">Tipo de Anotação:</label>
        <select class="form-control" id="tipo-anotacao" name="tipo-anotacao" required>
            <option value="HABILITAÇÃO">HABILITAÇÃO</option>
            <option value="PÓS-GRADUAÇÕES">PÓS-GRADUAÇÕES</option>
            <option value="REGISTRO NO CONSELHO OU ORDEM PROFISSIONAL DE CLASSE">REGISTRO NO CONSELHO OU ORDEM PROFISSIONAL DE CLASSE</option>
            <option value="CURSOS COMPLEMENTARES">CURSOS COMPLEMENTARES</option>
            <option value="EXERCÍCIO DE ATIVIDADE PROFISSIONAL – CIVIL">EXERCÍCIO DE ATIVIDADE PROFISSIONAL – CIVIL</option>
            <option value="EXERCÍCIO DE ATIVIDADE PROFISSIONAL – MILITAR">EXERCÍCIO DE ATIVIDADE PROFISSIONAL – MILITAR</option>
        </select>
    </div>
    <div class="form-group">
        <label for="nova-nota">Adicionar Nova Nota:</label>
        <textarea class="form-control" id="nova-nota" name="nova-nota" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Adicionar Nota</button>
</form>
    </div>
</header>
<section id="como-usar">
        <div class="container px-7 py-0">
            <div class="row gx-1 justify-content-center">
                <div class="col-lg-12">
                <?php
            include 'conexao.php';

            $area = 'CET';
            $sql = "SELECT * FROM notas WHERE area = '$area'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card mb-3'>";
                    echo "<div class='card-body'>";
                    echo "<h4 class='card-title text-success'>" . $row['tipo'] . "</h4>";
                            echo "<h5 class='card-title'>" . $row['titulo'] . "</h5>";
                    echo "<p class='card-text'><strong></strong> " . $row['conteudo'] . "</p>";
                    echo "<form action='excluir_nota.php' method='post'>";
                    echo "<input type='hidden' name='nota_id' value='" . $row['id'] . "'>";
                    echo "<input type='hidden' name='area' value='$area'>";
                    echo "<button type='submit' class='btn btn-success'>Excluir</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p class='text-center'>Nenhuma nota encontrada.</p>";
            }

            $conn->close();
            ?>
   
                </div>
            </div>
        </div>
    </section>



<div class="container px-4">
            <div class="row gx-4 justify-content-center">
                <div class="col-lg-8">
          
                </div>

        </section>
            </div>
        </div>


       
           

        <!-- Form Section -->
        

        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Seção de Seleção e Convocação</p></div>
        </footer>


    <!-- Bootstrap core JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
