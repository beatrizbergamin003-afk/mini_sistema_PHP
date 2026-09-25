<?php require_once __DIR__ . '/../includes/helpers.php';
require_once __DIR__ . '/../login/verifica_user.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Atualizar</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <h1>Atualiza usuário especifíco</h1>
    <div class="update">
        <p>No caso de não precisar atualizar algum dado, coloque o mesmo dado já inserido anteriormente</p>
        <section class="forms">
            <form action="" method="post">
                <label for="id">Digite o ID do User: </label>
                <input type="number" name="id" id="id" required> <br>
                <label for="name">Novo Nome: </label>
                <input type="text" name="name" id="name" required> <br>
                <label for="turma">Nova Turma: </label>
                <input type="text" name="turma" id="turma" required> <br>
                <label for="email">Novo Email: </label>
                <input type="text" name="email" id="email" required> <br>
                <label for="nasc">Nova Data de Nascimento: </label>
                <input type="date" name="nasc" id="nasc" required> <br>
                Novo Status: <br>
                <input type="radio" id="ativo" name="ativo" value="1" checked required>
                <label for="ativo">Ativo</label>
                <input type="radio" id="inativo" name="ativo" value="0" required>
                <label for="inativo">Inativo</label><br><br>
                <input type="reset" value="Limpar">
                <input type="submit" value="Enviar">
            </form>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $turma = $_POST['turma'];
                $email = $_POST['email'];
                $nasc = $_POST['nasc'];
                $ativo = $_POST['ativo'];
                update($conexao, $id, $name, $turma, $nasc, $ativo, $email);
            }
            ?>
            <?php include __DIR__ . '/../includes/footer.php'; ?>
    </div>
</body>

</html>