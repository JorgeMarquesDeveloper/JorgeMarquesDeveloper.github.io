<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_sisctemp";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Outras configurações da conexão podem ser adicionadas aqui, se necessário

?>
