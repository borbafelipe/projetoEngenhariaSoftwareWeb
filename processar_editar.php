<?php
include_once 'DBconfig.inc.php';
include_once 'DBconnect.inc.php';

// Verifica se o formulário de edição foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_postagem = $_POST["id"];
    $titulo = $_POST["titulo"];
    $mensagem = $_POST["mensagem"];
    $autor = $_POST["autor"];
    $tipo = $_POST["tipo"];
    $imagem = $_POST["imagem"];

    try {
        // Prepara a instrução SQL de atualização
        $sql = "UPDATE posts SET titulo = ?, mensagem = ?, autor = ?, tipo = ?, imagem = ? WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $titulo, PDO::PARAM_STR);
        $stmt->bindParam(2, $mensagem, PDO::PARAM_STR);
        $stmt->bindParam(3, $autor, PDO::PARAM_STR);
        $stmt->bindParam(4, $tipo, PDO::PARAM_STR);
        $stmt->bindParam(5, $imagem, PDO::PARAM_STR);
        $stmt->bindParam(6, $id_postagem, PDO::PARAM_INT);
        $stmt->execute();

        // Redireciona de volta para a página de gerenciamento após a atualização
        header("Location: gerenciar.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Se o formulário não foi enviado, redireciona para a página de gerenciamento
    header("Location: gerenciar.php");
    exit();
}
?>
