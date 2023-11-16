<?php
echo "esse é o trecho de codigo de home";
include_once 'DBconfig.inc.php'; // Inclui o arquivo de configuração do banco de dados
 
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=UTF8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Simula a busca de postagens no banco de dados
    $stmt = $pdo->query("SELECT * FROM posts");
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Exibe as postagens simuladas
    foreach ($posts as $post) {
        echo '<div class="post">';
        echo '<div class="post-user">' . $post['user'] . '</div>';
        echo '<div class="post-content">';
        echo '<div class="post-text">' . $post['content'] . '</div>';
        echo '<img src="' . $post['image'] . '" alt="Imagem do post" class="post-image">';
        echo '</div>';
        echo '</div>';
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
