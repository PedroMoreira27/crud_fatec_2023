<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21179023_pedromoreira27"; // usuário do MySQL
$pass = "|mw5[QQEyB/w]2!]"; // senha do MySQL
$dbname = "id21179023_site_fatec"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
