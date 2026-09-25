<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
</head>

<body>

</body>

</html>
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

    <?php
    include __DIR__ . '/../includes/header.php';
    ?>
    <h1>Faça login para continuar</h1>
    <hr>
    <main>
        <form action="" method="POST">
            <label for="email"> E-mail: </label>
            <input type="text" name="email" id="email" required><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" required><br>
            <input type="submit" value="Entrar">
            <input type="reset" value="Limpar">

        </form>
        <p>Não tem cadastro? <a href="./cadastrar.php">Cadastre-se aqui</a></p>
    </main>
    <hr>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $usuario = consulta_user($conexao, $_POST['email']);
        if ($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']) {
            session_start();
            $_SESSION['id'] = $usuario['id'];
            header("Location:  ../index.php");
            exit();
        } else {
            echo "Usuário ou senha inválidos.";
        }

        header("Location: ../index.php");
        exit();
    }
    ?>
    <main>
        <?php include __DIR__ . '/../includes/footer.php';
        ?>
</body>

</html>