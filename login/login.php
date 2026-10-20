<?php

session_start();

require_once __DIR__ . '/../includes/functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="../assets/favicon.png">

    <title>Entrar - Sonder</title>

    <link rel="stylesheet" href="../style/login.css">

</head>

<body>


    <main class="pagina-login">


        <div class="login-box">


            <a href="../index.php">

                <img class="logo" src="../imagens/logo.png" alt="Logo Sonder">

            </a>

            <h1>Entrar</h1>

            <p class="subtitulo">Entre na sua conta para continuar.</p>

            <form action="" method="post">


                <label>Email</label>

                <input type="email" name="email" placeholder="Digite seu email">


                <label>Senha</label>

                <input type="password" name="senha" placeholder="Digite sua senha">

                <input type="submit" value="Entrar">

            </form>

            <p class="cadastro">

                Ainda não possui uma conta?

                <a href="cadastra.php">Criar conta</a>
            </p>

            <?php

            if($_SERVER['REQUEST_METHOD'] == "POST"){

                $usuario = consultar_user(
                    $conexao,
                    $_POST['email']
                );


                if($usuario && $usuario['senha'] == $_POST['senha']){

                    $_SESSION['id'] = $usuario['id'];

                    header("Location: ../app/home.php");

                    exit;

                } else {

                    echo '<div class="mensagem-erro">
                        Email ou senha inválidos.
                    </div>';

                }

            }

            ?>


        </div>


    </main>


</body>

</html>