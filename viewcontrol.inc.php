<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['buttonLabel'])) {
        $buttonLabel = htmlspecialchars($_POST['buttonLabel']);

        switch ($buttonLabel) {
            case 'home':
                echo "[espaço de codigo para chamar dinamicamente algo]";
                break;
            case 'lista':
                echo "Lista";
                break;
            case 'pesquise':
                echo " Pesquise";
                break;
            case 'menu':
                echo "Menu";
                break;
            default:
                echo "Opção inválida";
        }
    } else {
        echo "Nenhuma informação do botão recebida";
    }
} else {
    echo "Menu";
}
?>
