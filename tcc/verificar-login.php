<?php
// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifique se o usuário e a senha estão corretos (substitua com seus próprios dados)
    $user = "whaniza@tcr";
    $pass = "123";

    if ($username == $user && $password == $pass) {
        // Login correto, redirecione para a página protegida
        header("Location: admin.php");
        exit();
    } else {
        // Login incorreto, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: login.html?erro=1");
        exit();
    }
}
?>
