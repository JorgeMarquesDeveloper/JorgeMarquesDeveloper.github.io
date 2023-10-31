<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Formulário de Cadastro</h2>
        <form action="processar.php" method="POST">
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

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>