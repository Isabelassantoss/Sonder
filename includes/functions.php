<?php

require_once __DIR__ . '/../database/connect.php';

function cadastrar($conexao, $titulo, $artista, $album, $nota, $comentario, $usuario_id)
{
    $sql = "INSERT INTO musicas(titulo, artista, album, nota, comentario, usuario_id)
            VALUES (:titulo, :artista, :album, :nota, :comentario, :usuario_id)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":artista", $artista);
    $stmt->bindParam(":album", $album);
    $stmt->bindParam(":nota", $nota);
    $stmt->bindParam(":comentario", $comentario);
    $stmt->bindParam(":usuario_id", $usuario_id);

    $stmt->execute();

    echo '<div style="text-align: center;">Música cadastrada com sucesso!</div>';
}

function excluir($conexao, $id, $usuario_id)
{
    $sql = "DELETE FROM musicas
            WHERE id = :id
            AND usuario_id = :usuario_id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":usuario_id", $usuario_id);

    $stmt->execute();

    echo "Avaliação excluída!";
}

function atualizar($conexao, $id, $titulo, $artista, $album, $nota, $comentario, $usuario_id)
{
    $sql = "UPDATE musicas
            SET titulo = :titulo,
                artista = :artista,
                album = :album,
                nota = :nota,
                comentario = :comentario
            WHERE id = :id
            AND usuario_id = :usuario_id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titulo", $titulo);
    $stmt->bindParam(":artista", $artista);
    $stmt->bindParam(":album", $album);
    $stmt->bindParam(":nota", $nota);
    $stmt->bindParam(":comentario", $comentario);
    $stmt->bindParam(":usuario_id", $usuario_id);

    $stmt->execute();
}

function consultar($conexao, $id)
{
    $sql = "SELECT * FROM musicas WHERE id = :id";

    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $musica = $stmt->fetch(PDO::FETCH_ASSOC);

    echo "Música: {$musica['titulo']}<br>";
    echo "Artista: {$musica['artista']}<br>";
    echo "Álbum: {$musica['album']}<br>";
    echo "Nota: {$musica['nota']}<br>";
    echo "Comentário: {$musica['comentario']}<br>";
}

function consultar_user($conexao, $email)
{
    $sql = "SELECT id, email, senha
            FROM usuarios
            WHERE email = :email";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":email", $email);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    return $usuario;
}


function relatorio($conexao, $usuario_id)
{
    $sql = "SELECT musicas.*, usuarios.nome
            FROM musicas
            INNER JOIN usuarios
            ON musicas.usuario_id = usuarios.id";

    $stmt = $conexao->prepare($sql);

    $stmt->execute();

    $musicas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($musicas as $musica){

        echo '<div class="avaliacao">';

        echo '<div class="usuario">';
        echo '👤 ' . $musica['nome'];
        echo '</div>';

        echo '<h2>' . $musica['titulo'] . '</h2>';

        echo '<p class="artista">';
        echo $musica['artista'];
        echo '</p>';

        echo '<p class="album">';
        echo 'Álbum: ' . $musica['album'];
        echo '</p>';

        echo '<div class="nota">';
        echo '★ ' . $musica['nota'];
        echo '</div>';

        echo '<p class="comentario">';
        echo '"' . $musica['comentario'] . '"';
        echo '</p>';

        if($musica['usuario_id'] == $usuario_id){

            echo '<div class="acoes">';

            echo '<a class="editar" href="update.php?id=' . $musica['id'] . '">';
            echo '✏️ Editar';
            echo '</a>';

            echo '<a class="excluir" href="delete.php?id=' . $musica['id'] . '">';
            echo '🗑️ Excluir';
            echo '</a>';
    
            echo '</div>';
        
        }

        echo '</div>';
    }
}



function estatisticas($conexao)
{
    $sql = "SELECT COUNT(*) FROM musicas";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $total = $stmt->fetchColumn();

    $sql = "SELECT MAX(nota) FROM musicas";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $melhorNota = $stmt->fetchColumn();

    // Buscar a menor nota
    $sql = "SELECT MIN(nota) FROM musicas";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $piorNota = $stmt->fetchColumn();

    $sql = "SELECT titulo, artista, nota
            FROM musicas
            ORDER BY nota DESC, id DESC
            LIMIT 3";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $melhores = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<section class="estatisticas">';

    echo '<div class="estatistica-card">';
    echo '<p>🎵 Total de avaliações</p>';
    echo '<h2>' . $total . '</h2>';
    echo '</div>';

    echo '<div class="estatistica-card">';
    echo '<p>⭐ Maior nota</p>';
    echo '<h2>' . ($melhorNota !== null ? $melhorNota : 0) . ' / 5</h2>';
    echo '</div>';

    echo '<div class="estatistica-card">';
    echo '<p>💔 Menor nota</p>';
    echo '<h2>' . ($piorNota !== null ? $piorNota : 0) . ' / 5</h2>';
    echo '</div>';

    echo '</section>';

    echo '<section class="ranking-musicas">';
    echo '<h2>🏆 Músicas mais bem avaliadas</h2>';

    foreach ($melhores as $musica) {
        echo '<div class="musica-ranking">';
        echo '<h3>' . htmlspecialchars($musica['titulo']) . '</h3>';
        echo '<p>' . htmlspecialchars($musica['artista']) . '</p>';
        echo '<p>★ ' . $musica['nota'] . '</p>';
        echo '</div>';
    }

    echo '</section>';
}


function cadastre_user($conexao, $nome, $email, $senha)
{
    $sql = "INSERT INTO usuarios(nome, email, senha)
            VALUES (:nome, :email, :senha)";

    $stmt = $conexao->prepare($sql);

    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();

    echo "Usuário cadastrado com sucesso!";
}

function buscarPorId($conexao, $id)
{
    $sql = "SELECT * FROM musicas WHERE id = :id";

    $stmt = $conexao->prepare($sql);

    $stmt->bindValue(':id', $id);

    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
