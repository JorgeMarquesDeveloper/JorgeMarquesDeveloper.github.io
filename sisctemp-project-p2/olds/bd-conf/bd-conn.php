<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sisctemp_bd";

// Criando a conexão com o banco de dados
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificando a conexão com o banco  de dados
if (!$conn) {
    die("A conexão com o BD falhou: " . mysqli_connect_error());
}
?>
