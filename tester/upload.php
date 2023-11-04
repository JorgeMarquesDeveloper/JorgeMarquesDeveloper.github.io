<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se um CPF foi fornecido
    if (isset($_POST["cpf"]) && !empty($_POST["cpf"])) {
        $cpf = $_POST["cpf"];
        
        // Diretório de destino para o upload
        $upload_dir = '../uploads/';

        // Nome da imagem com base no CPF
        $image_name = $cpf . '.png'; // Altere a extensão conforme necessário

        // Verifique se o campo "imagem" foi enviado corretamente
        if (isset($_FILES["imagem"]) && $_FILES["imagem"]["error"] == 0) {
            // Verifique se o diretório de destino existe
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            // Tente mover o arquivo para o diretório de destino
            if (move_uploaded_file($_FILES["imagem"]["tmp_name"], $upload_dir . $image_name)) {
                echo "Upload da imagem com sucesso.";
            } else {
                echo "O upload da imagem falhou.";
            }
        } else {
            echo "O campo 'imagem' não foi enviado corretamente.";
        }
    } else {
        echo "O CPF não foi fornecido.";
    }
} else {
    echo "Acesso inválido.";
}
?>
