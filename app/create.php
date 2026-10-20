<?php

require_once __DIR__ . '/../login/verifica_user.php';
require_once __DIR__ . '/../includes/functions.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">

    <title>Avaliar música - Sonder</title>

    <link rel="stylesheet" href="/Sonder/style/create.css">

</head>

<body>

    <main class="pagina-cadastro">

        <div class="cadastro-musica">

            <img class="logo" src="/Sonder/imagens/logo.png" alt="Logo Sonder">

            <h1>Avaliar música</h1>
            
            <p class="subtitulo"> Dê sua opinião sobre uma música.</p>

            <form action="" method="post">

                <label>Título da música</label>

                <input type="text" name="titulo" placeholder="Digite o título da música" >

                <label>Artista</label>

                <input type="text" name="artista" placeholder="Digite o nome do artista">

                <label>Álbum</label>

                <input type="text" name="album" placeholder="Digite o álbum">

                <div class="nota-area">

                
                <label>Nota</label>

                <div class="estrelas">
                    <input type="radio" name="nota" value="5" id="estrela5">
                    <label for="estrela5">★</label>

                    <input type="radio" name="nota" value="4" id="estrela4">
                    <label for="estrela4">★</label>

                    <input type="radio" name="nota" value="3" id="estrela3">
                    <label for="estrela3">★</label>

                    <input type="radio" name="nota" value="2" id="estrela2">
                    <label for="estrela2">★</label>

                    <input type="radio" name="nota" value="1" id="estrela1">
                    <label for="estrela1">★</label>
                </div>

                <label>Comentário</label>

                <textarea name="comentario" placeholder="O que você achou dessa música?" ></textarea>

           
        <input type="submit" value="Avaliar música">

        </form>

        <a class="avaliacoes" href="select.php"> Ver avaliações </a>

        <a class="voltar" href="home.php"> Voltar </a>

            <?php

            if($_SERVER['REQUEST_METHOD'] == "POST"){

                cadastrar(
                    $conexao,
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