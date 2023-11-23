<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
        }

        .post-container {
            display: flex;
            flex-wrap: wrap;
            width: 100%; /* Alteração para ocupar 100% da largura */
        }

        .post {
            width: 24%;
            margin: 1%;
            border: 1px solid #ccc;
            padding: 15px;
            border-radius: 5px;
        }

        .post-user {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .post-title {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .post-message {
            margin-bottom: 10px;
        }

        .post-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .post-info {
            font-style: italic;
            color: #555;
        }
    </style>
</head>

<body>
    <h2>Postagens</h2>

    <?php
    include_once 'DBconfig.inc.php';
    include_once 'DBconnect.inc.php';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->query("SELECT * FROM posts");
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo '<div class="post-container">';
        foreach ($posts as $post) {
            echo '<div class="post">';
            echo '<div class="post-user">' . htmlspecialchars($post['autor']) . '</div>';
            echo '<div class="post-content">';
            echo '<div class="post-title">' . htmlspecialchars($post['titulo']) . '</div>';
            echo '<div class="post-message">' . htmlspecialchars($post['mensagem']) . '</div>';

            // Exibe a imagem se estiver presente
            if (!empty($post['imagem'])) {
                echo '<img src="' . htmlspecialchars($post['imagem']) . '" alt="Imagem do post" class="post-image">';
            }

            echo '<div class="post-info">Tipo: ' . htmlspecialchars($post['tipo']) . ' | Data: ' . htmlspecialchars($post['data_postagem']) . '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    ?>

</body>

</html>
