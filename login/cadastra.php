<?php

require_once __DIR__ . '/../includes/functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">


    <title>Criar conta - Sonder</title>

    <link rel="stylesheet" href="/Sonder/style/cadastro.css">

</head>

<body>

    <main class="pagina-cadastro">

        <div class="cadastro">

            <a href="Sonder/index.php">

                <img class="logo"src="/Sonder/imagens/logo.png"alt="Logo Sonder">

            </a>


            <h1>Criar conta</h1>

            <p class="subtitulo">
                Crie sua conta para começar a avaliar músicas.
            </p>


            <form action="" method="post">

                <label>Nome</label>

                <input type="text"name="nome"placeholder="Digite seu nome">

                <label>Email</label>

                <input type="email"name="email"placeholder="Digite seu email">

                <label>Senha</label>

                <input type="password"name="senha"placeholder="Digite sua senha">

                <input type="submit"value="Criar conta">

            </form>


            <p class="login">Já possui uma conta?

                <a href="/Sonder/login.php">Entrar</a>

            </p>

        <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "INSERT INTO usuarios(nome, email, senha)
                    VALUES (:nome, :email, :senha)
                    RETURNING id";

            $stmt = $conexao->prepare($sql);

            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":senha", $senha);

            $stmt->execute();

            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

            session_start();

            $_SESSION['id'] = $usuario['id'];

            header("Location: ../app/home.php");

            exit;
        }

        ?>


        </div>

    </main>

</body>

</html>
