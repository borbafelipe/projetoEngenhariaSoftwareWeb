<?php
include_once 'DBconfig.inc.php';
include_once 'DBconnect.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST["titulo"];
    $mensagem = $_POST["mensagem"];
    $autor = $_POST["autor"];
    $tipo = $_POST["tipo"];
    $imagem = $_POST["imagem"];

    try {
        $sql = "INSERT INTO posts (titulo, mensagem, autor, tipo, imagem) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(1, $titulo, PDO::PARAM_STR);
        $stmt->bindParam(2, $mensagem, PDO::PARAM_STR);
        $stmt->bindParam(3, $autor, PDO::PARAM_STR);
        $stmt->bindParam(4, $tipo, PDO::PARAM_STR);
        $stmt->bindParam(5, $imagem, PDO::PARAM_STR);
        $stmt->execute();

        header("Location: gerenciar.php");
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    header("Location: gerenciar.php");
    exit();
}
?>
