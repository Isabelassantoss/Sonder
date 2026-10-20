<?php
$host = '192.168.10.28';
$dbname = 'sonder';
$user = 'sonder_user';
$pass = 'sonder123';

try {
    $conexao = new PDO(
        "pgsql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>
