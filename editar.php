<?php
include_once 'DBconfig.inc.php';
include_once 'DBconnect.inc.php';

// Verifica se o ID da postagem foi fornecido na URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id_postagem = $_GET['id'];

    try {
        // Consulta SQL para obter os detalhes da postagem
        $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $id_postagem, PDO::PARAM_INT);
        $stmt->execute();
        $postagem = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verifica se a postagem existe
        if ($postagem) {
            // Exibição do formulário de edição
            echo '<!DOCTYPE html>
                    <html lang="en">
                    
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Editar Postagem</title>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                margin: 20px;
                            }
                    
                            form {
                                max-width: 600px;
                                margin: 0 auto;
                            }
                    
                            label {
                                display: block;
                                margin-bottom: 5px;
                            }
                    
                            input,
                            textarea {
                                width: 100%;
                                padding: 8px;
                                margin-bottom: 15px;
                                box-sizing: border-box;
                            }
                    
                            button {
                                padding: 10px;
                                background-color: #007BFF;
                                color: #fff;
                                border: none;
                                cursor: pointer;
                            }
                        </style>
                    </head>
                    
                    <body>
                        <h2>Editar Postagem</h2>
                        <form method="post" action="processar_editar.php">
                            <input type="hidden" name="id" value="' . $postagem['id'] . '">
                    
                            <label for="titulo">Título:</label>
                            <input type="text" name="titulo" value="' . htmlspecialchars($postagem['titulo']) . '" required>
                    
                            <label for="mensagem">Mensagem:</label>
                            <textarea name="mensagem" rows="4" required>' . htmlspecialchars($postagem['mensagem']) . '</textarea>
                    
                            <label for="autor">Autor:</label>
                            <input type="text" name="autor" value="' . htmlspecialchars($postagem['autor']) . '" required>
                    
                            <label for="tipo">Tipo:</label>
                            <input type="text" name="tipo" value="' . htmlspecialchars($postagem['tipo']) . '" required>
                    
                            <label for="imagem">Endereço da Imagem:</label>
                            <input type="text" name="imagem" value="' . htmlspecialchars($postagem['imagem']) . '">
                    
                            <button type="submit">Salvar Edições</button>
                        </form>
                    </body>
                    
                    </html>';
            exit();
        } else {
            echo "Postagem não encontrada.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    // Se o ID não foi fornecido, redireciona para a página de gerenciamento
    header("Location: gerenciar.php");
    exit();
}
?>
