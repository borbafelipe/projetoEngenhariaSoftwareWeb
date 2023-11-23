<?php
include_once 'DBconfig.inc.php';
include_once 'DBconnect.inc.php';

$sql = "SELECT id, titulo, mensagem, autor, tipo, imagem, data_postagem FROM posts";
$resultado = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .postagem {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .titulo {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .info {
            font-style: italic;
            margin-bottom: 10px;
            color: #555;
        }

        .mensagem {
            margin-bottom: 10px;
        }

        .imagem {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .botoes {
            display: flex;
            justify-content: space-between;
        }

        .editar,
        .deletar {
            padding: 8px 15px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .nova-postagem,
        .voltar {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .nova-postagem:hover,
        .voltar:hover,
        .editar:hover,
        .deletar:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <h2>Painel de Administração</h2>

    <!-- Botoes fixados no cabeçalho -->
    <a href="post.php" class="nova-postagem">Nova Postagem</a>
    <a href="index.php" class="voltar">Voltar para a Index</a>

    <?php
    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="postagem">';
        echo '<div class="titulo">' . htmlspecialchars($row['titulo']) . '</div>';
        echo '<div class="info">Autor: ' . htmlspecialchars($row['autor']) . ' | Tipo: ' . htmlspecialchars($row['tipo']) . ' | Data: ' . htmlspecialchars($row['data_postagem']) . '</div>';
        echo '<div class="mensagem">' . htmlspecialchars($row['mensagem']) . '</div>';
        
        // Exibe a imagem se estiver presente
        if (!empty($row['imagem'])) {
            echo '<img src="' . htmlspecialchars($row['imagem']) . '" alt="Imagem da postagem" class="imagem">';
        }
        
        echo '<div class="botoes">';
        echo '<button class="editar" onclick="editarPostagem(' . $row['id'] . ')">Editar</button>';
        echo '<button class="deletar" onclick="deletarPostagem(' . $row['id'] . ')">Deletar</button>';
        echo '</div>';
        echo '</div>';
    }
    ?>

    <script>
        function editarPostagem(id) {
            window.location.href = 'editar.php?id=' + id;
        }

        function deletarPostagem(id) {
            var confirmaDelecao = confirm("Tem certeza de que deseja deletar esta postagem?");
            if (confirmaDelecao) {
                window.location.href = 'excluir.php?id=' + id;
            }
        }
    </script>
</body>

</html>
