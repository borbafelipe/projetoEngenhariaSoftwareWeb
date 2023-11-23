<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Postagem</title>
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
    <h2>Nova Postagem</h2>
    <form method="post" action="processar_post.php">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required>

        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" rows="4" required></textarea>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required>

        <label for="tipo">Tipo:</label>
        <input type="text" name="tipo" required>

        <label for="imagem">Endereço da Imagem:</label>
        <input type="text" name="imagem">

        <button type="submit">Criar Postagem</button>
    </form>
</body>

</html>
