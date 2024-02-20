<?php
session_start(); // Inicia a sessão

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Verifique se o usuário e a senha estão corretos (substitua com seus próprios dados)
    $user = "whaniza@tcr";
    $pass = "123";

    if ($username == $user && $password == $pass) {
        // Login correto, configure a variável de sessão
        $_SESSION["logged_in"] = true;

        // Redirecione para a página protegida (admin.php)
        header("Location: admin.php");
       
    } else {
        // Login incorreto, redirecione de volta para a página de login com uma mensagem de erro
        header("Location: login.html?erro=1");
        exit();
    }
}