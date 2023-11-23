document.addEventListener('DOMContentLoaded', function () {
    // Capturando elementos HTML
    const settingsButton = document.getElementById('settings-button');
    const settingsPopup = document.getElementById('settings-popup');
    const closeSettingsPopup = document.getElementById('close-settings-popup');

    const profileButton = document.getElementById('profile-button');
    const profilePopup = document.getElementById('profile-popup');
    const closeProfilePopup = document.getElementById('close-profile-popup');

    // Definir pop-ups como fechados por padrão
    settingsPopup.style.display = 'none';
    profilePopup.style.display = 'none';

    // Exibir o pop-up de configurações ao clicar no botão "Configurações"
    settingsButton.addEventListener('click', () => {
        settingsPopup.style.display = 'block';
    });

    // Fechar o pop-up de configurações ao clicar no botão "Fechar"
    closeSettingsPopup.addEventListener('click', () => {
        settingsPopup.style.display = 'none';
    });

    // Exibir o pop-up de perfil ao clicar no botão "Perfil"
    profileButton.addEventListener('click', () => {
        profilePopup.style.display = 'block';
    });

    // Fechar o pop-up de perfil ao clicar no botão "Fechar"
    closeProfilePopup.addEventListener('click', () => {
        profilePopup.style.display = 'none';
    });
});
