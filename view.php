<div id="content">
<?php
// Supondo que você já incluiu ou requisitou o viewcontrol.php anteriormente no código...

ob_start(); // Inicia o buffering de saída

// Executa o viewcontrol.php para capturar sua saída
include 'viewcontrol.inc.php';

// Captura a saída do viewcontrol.php
$view_content = ob_get_clean(); 

// Exibe a saída no arquivo view
echo $view_content;
?>

</div>
