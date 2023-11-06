<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header class="header">
        <button id="settings-button" class="button">Configurações</button>
        <button id="profile-button" class="button">Perfil</button>
    </header>
    
    <!-- Pop-up de Configurações -->
    <div id="settings-popup" class="popup">
        <h2>Configurações</h2>
        <ul>
            <li>Configuração 1</li>
            <li>Configuração 2</li>
            <li>Configuração 3</li>
        </ul>
        <button id="close-settings-popup" class="button">Fechar</button>
    </div>

    <!-- Pop-up de Perfil -->
    <div id="profile-popup" class="popup">
        <h2>Perfil</h2>
        <ul>
            <li>Perfil 1</li>
            <li>Perfil 2</li>
            <li>Perfil 3</li>
        </ul>
        <button id="close-profile-popup" class="button">Fechar</button>
    </div>

    <script src="popup.js"></script>
</body>
</html>
