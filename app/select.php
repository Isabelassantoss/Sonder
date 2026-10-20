<?php
require_once __DIR__ . '/../login/verifica_user.php';
require_once __DIR__ . '/../includes/functions.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/Sonder/style/relatorio.css">

    <title>Avaliações - Sonder</title>

</head>

<body>


<main class="pagina-relatorio">

    <h1>Avaliações</h1>

    <p>
        Músicas que já foram avaliadas no Sonder.
    </p>

    <?php

    relatorio($conexao, $_SESSION['id']);

    ?>

</main>

<a href="home.php" class="botao-voltar"> Voltar </a>

<?php include '../includes/footer.php'; ?>

</body>

</html>