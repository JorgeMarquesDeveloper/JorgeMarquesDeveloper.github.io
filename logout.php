<?php
session_start();

// Destrua a sessão para fazer o logout
session_destroy();

// Redirecione o usuário de volta para a página inicial (index.php)
header("Location: index.php");
exit();
?>