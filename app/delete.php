<?php
require_once __DIR__ . '/../login/verifica_user.php';
require_once __DIR__ . '/../database/connect.php';
require_once __DIR__ . '/../includes/functions.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $id = $_POST['id'];

    excluir($conexao, $id, $_SESSION['id']);

    header('Location: select.php');

    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="/Sonder/assets/favicon.png">

    <link rel="stylesheet" href="/Sonder/style/delete.css">

    <title>Excluir avaliação - Sonder</title>

</head>

<body>

    <div class="container-delete">

        <div class="icone-delete"> 🗑️ </div>

        <h1>Excluir avaliação?</h1>

        <p>
            Tem certeza que deseja excluir esta avaliação?
            Essa ação não poderá ser desfeita.
        </p>

        <form method="POST">

            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

            <div class="botoes">

                <button type="submit" class="btn-excluir">Sim, excluir</button>

                <a href="select.php" class="btn-cancelar">Cancelar</a>

            </div>

        </form>

    </div>
</body>

</html>

