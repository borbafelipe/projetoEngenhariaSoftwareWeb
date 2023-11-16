<?php
include_once("../config.inc.php");
$titulo = $_REQUEST['titulo'];
$texto = $_REQUEST['texto'];
$sql =
"INSERT INTO paginas (titulo,texto)
VALUES ('$titulo','$texto')";
$insert = mysqli_query($conn, $sql);

mysqli_close($conn);
?>