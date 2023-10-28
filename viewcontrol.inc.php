<?php
if (isset($_POST['buttonLabel'])) {
    $buttonLabel = htmlspecialchars($_POST['buttonLabel']);
    echo "Você clicou em " . $buttonLabel;
} else {
    echo "Você clicou em Botão 1 (padrão).";
}
?>
