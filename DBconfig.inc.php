<?php
// Conexão com servidor MySQL
$conn = mysqli_connect("localhost","root","");
// Conexão com o banco MySQL chamado projeto
$db = mysqli_select_db($conn,"engenhariasoftware");
if($conn){
echo "Conexão estabelecida com sucesso";
}else{
echo "Erro na conexão com banco de dados.";
}
?>