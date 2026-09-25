<?php require_once __DIR__ . '/../includes/helpers.php'; 
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Registros</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <h1>Registros de Alunos: </h1>
    <hr>
    <?php 
    read($conexao);
    ?>
    <a href="../">Voltar</a>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>