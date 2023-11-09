<div id="content">
<?php


ob_start(); 


include 'viewcontrol.inc.php';


$view_content = ob_get_clean(); 


echo $view_content;
?>

</div>
