<!DOCTYPE html>
<html>
<head>
    <title>Upload de Imagem</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf" required>
        <br>
        <label for="imagem">Imagem:</label>
        <input type="file" name="imagem" id="imagem" accept="image/*" required>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
