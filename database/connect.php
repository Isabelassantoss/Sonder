<?php
$host = 'localhost';
$dbname = 'sonder';
$user = 'sonder_user';
$pass = 'sonder123';

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    exit("Não foi possível conectar ao banco de dados. Confira se o PostgreSQL está em execução e se os dados em database/connect.php estão corretos.");
}
?>
