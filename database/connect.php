<?php
$host = "192.168.10.44";
$dbname = "escola";
$user = "joao";
$pass = "123456"; 

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    );
} catch (PDOException $e) {
    // Para a execução se a conexão falhar
    die("Erro de conexão com o banco de dados: " . $e->getMessage());
}
?>