<?php 
require_once __DIR__ . '/../login/verifica_user.php';
require_once __DIR__ . '/../includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Apaga Aluno</title>
</head>
<body>
    <?php
    include __DIR__ . '/../includes/header.php';
    ?>
    <h1>Apague um Aluno aqui: </h1>
    <div class="delete">
    <form action="" method="POST">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id"> <br>
        <input type="submit" value="Apagar">
    </form>
    <hr>
    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];
    delete($conexao, $id);}
    ?>
    <hr>
    <?php
    include __DIR__ . '/../includes/footer.php';
    ?>
    </div>
</body>

</html>