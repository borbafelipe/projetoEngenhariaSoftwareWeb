<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Página</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Estilo para o header fixo no topo */
        #header {
        
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Estilo para o footer fixo na parte inferior */
        #footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;

            color: #fff;
            padding: 10px;
            text-align: center;
        }

        /* Estilo para o conteúdo principal */
        .conteudo {
            padding: 20px;
            margin-bottom: 60px;
        }
    </style>
</head>

<body>
    <!-- Header fixo no topo -->
    <div id="header">
        <?php include_once 'header.php'; ?>
    </div>

    <!-- Conteúdo principal -->
    <div class="conteudo">
        <?php
        include_once 'DBconnect.inc.php';
        include_once 'view.php';
        ?>
    </div>

    <!-- Footer fixo na parte inferior -->
    <div id="footer">
        <?php include_once 'footer.php'; ?>
    </div>
</body>

</html>





