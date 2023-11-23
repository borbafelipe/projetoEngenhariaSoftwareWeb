<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página</title>
    <!-- Inclusão do CSS do Font Awesome (ícones) -->
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Seu conteúdo HTML aqui -->
    <div id="content"></div>

    <footer class="footer">
        <div class="footer-buttons">
            <button class="footer-button" id="button1" data-button="home">
                <i class="fa-solid fa-house"></i> 
                Home


            <!-- Novo botão "Entrada do Zelador" -->
            <a href="gerenciar.php">
                <button class="footer-button" id="button5" data-button="zelador">
                    <i class="fa-solid fa-key"></i> 
                    Entrada do Zelador
                </button>
            </a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>

</html>
