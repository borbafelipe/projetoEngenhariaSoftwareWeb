<?php
// Inclui o arquivo de configuração do banco de dados
include_once 'DBconfig.inc.php';
include_once 'DBconnect.inc.php';

// Verifica se o ID da postagem foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_postagem = $_GET['id'];

    try {
        // Prepara a instrução SQL de exclusão
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");

        // Vincula o parâmetro
        $stmt->bindParam(':id', $id_postagem, PDO::PARAM_INT);

        // Executa a instrução
        $stmt->execute();

        // Redireciona de volta para a página de gerenciamento após a exclusão
        header("Location: gerenciar.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Se o ID não foi fornecido, redireciona para a página de gerenciamento
    header("Location: gerenciar.php");
    exit();
}
?>
