<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project001";

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}


// Se você terminar de usar a conexão, é uma boa prática fechá-la
// $conn->close();

?>
