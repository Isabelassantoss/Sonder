<?php

require_once __DIR__ . '/../login/verifica_user.php';
require_once __DIR__ . '/../includes/functions.php';

$id = $_GET['id'];

$musica = buscarPorId($conexao, $id);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">

    <title>Atualizar avaliação - Sonder</title>

    <link rel="stylesheet" href="/Sonder/style/update.css">

</head>

<body>

    <main class="pagina-cadastro">

        <div class="cadastro-musica">

            <img class="logo" src="/Sonder/imagens/logo.png" alt="Logo Sonder">

            <h1>Atualizar avaliação</h1>

            <p class="subtitulo"> Altere sua avaliação sobre essa música. </p>

            <form action="" method="post">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo $musica['id']; ?>"
                >

                <label>Título da música</label>

                <input
                    type="text"
                    name="titulo"
                    value="<?php echo $musica['titulo']; ?>"
                    placeholder="Digite o título da música"
                    required
                >

                <label>Artista</label>

                <input
                    type="text"
                    name="artista"
                    value="<?php echo $musica['artista']; ?>"
                    placeholder="Digite o nome do artista"
                    required
                >

                <label>Álbum</label>

                <input
                    type="text"
                    name="album"
                    value="<?php echo $musica['album']; ?>"
                    placeholder="Digite o álbum"
                    required
                >

                <div class="nota-area">

                    <label>Nota</label>

                    <div class="estrelas">

                        <input
                            type="radio"
                            name="nota"
                            value="5"
                            id="estrela5"
                            <?php if ($musica['nota'] == 5) echo 'checked'; ?>
                        >
                        <label for="estrela5">★</label>

                        <input
                            type="radio"
                            name="nota"
                            value="4"
                            id="estrela4"
                            <?php if ($musica['nota'] == 4) echo 'checked'; ?>
                        >
                        <label for="estrela4">★</label>

                        <input
                            type="radio"
                            name="nota"
                            value="3"
                            id="estrela3"
                            <?php if ($musica['nota'] == 3) echo 'checked'; ?>
                        >
                        <label for="estrela3">★</label>

                        <input
                            type="radio"
                            name="nota"
                            value="2"
                            id="estrela2"
                            <?php if ($musica['nota'] == 2) echo 'checked'; ?>
                        >
                        <label for="estrela2">★</label>

                        <input
                            type="radio"
                            name="nota"
                            value="1"
                            id="estrela1"
                            <?php if ($musica['nota'] == 1) echo 'checked'; ?>
                        >
                        <label for="estrela1">★</label>

                    </div>

                </div>

                <label>Comentário</label>

                <textarea  name="comentario" placeholder="O que você achou dessa música?" required ><?php echo $musica['comentario']; ?></textarea>

                <input type="submit" value="Atualizar avaliação">

            </form>

            <a class="avaliacoes" href="select.php"> Ver avaliações</a>

            <a class="voltar" href="home.php">Voltar</a>

            <?php

            if ($_SERVER['REQUEST_METHOD'] == "POST") {

            atualizar(
                $conexao,
                $_POST['id'],
                $_POST['titulo'],
                $_POST['artista'],
                $_POST['album'],
                $_POST['nota'],
                $_POST['comentario'],
                $_SESSION['id']
            );

            }

            ?>

        </div>

    </main>

    <?php include '../includes/footer.php'; ?>

</body>

</html>
