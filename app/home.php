<?php
require_once __DIR__ . '/../login/verifica_user.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">

    <title>Sonder</title>

    <link rel="stylesheet" href="/Sonder/style/home.css">
    
</head>

<body>

    <main class="pagina">

        <header>

            <a href="../index.php">
                <img src="/Sonder/imagens/logo.png" alt="Logo Sonder">
            </a>

            <div>
                <h1>Bem-vindo ao Sonder</h1>
                <p>O que você quer fazer hoje?</p>
            </div>

        </header>

        <section class="opcoes">

            <div class="card">

                <h2>🎵</h2>

                <h3>Avaliar música</h3>

                <p>
                    Registre uma nova música e compartilhe sua opinião.
                </p>

                <a href="create.php">Avaliar música</a>

            </div>


            <div class="card">

                <h2>🔎</h2>

                <h3>Ver avaliações</h3>

                <p>
                    Veja as músicas que já foram avaliadas no Sonder.
                </p>

                <a href="select.php">Ver avaliações</a>

            </div>

        </section>


        <a class="sair" href="../login/logout.php">Sair</a>

    </main>

    <?php include '../includes/footer.php'; ?>

</body>

</html>