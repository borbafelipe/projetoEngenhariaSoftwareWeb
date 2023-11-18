<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['buttonLabel'])) {
        $buttonLabel = htmlspecialchars($_POST['buttonLabel']);

        switch ($buttonLabel) {
            case 'home':
                include 'homeview.php'; // Incluir o arquivo homeview.php para a opção 'home'
                break;
            case 'lista':
                include 'listaview.php'; // Incluir o arquivo listaview.php para a opção 'lista'
                break;
            case 'pesquise':
                include 'pesquiseview.php'; // Incluir o arquivo pesquiseview.php para a opção 'pesquise'
                break;
            case 'menu':
                include 'menuview.php'; // Incluir o arquivo menuview.php para a opção 'menu'
                break;
            default:
                echo "Opção inválida";
        }
    } else {
        echo "Nenhuma informação do botão recebida";
    }
} else {
    include 'homeview.php';
}
?>

