<?php require_once __DIR__ . '/../includes/helpers.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Cadastre-se</title>
</head>

<body>
    <div class="create">
        <?php
        include __DIR__ . '/../includes/header.php';
        ?>
        <h1>Registre-se: </h1>
        <hr>
        <main>
            <form action="" method="POST">
                <label for="email"> E-mail: </label>
                <input type="text" name="email" id="email" required><br>
                <label for="senha">Senha: </label>
                <input type="password" name="senha" id="senha" required><br>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
                <p>Já tem cadastro? <a href="./login.php">Entre aqui</a></p>
    
            </form>
        </main>
        <hr>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            cadastra_user($conexao, $email, $senha);
            header("Location: ../index.php");
            exit();
           
            
        }
        ?>
        <main>
            <?php include __DIR__ . '/../includes/footer.php';
    ?>
</body>
</html>