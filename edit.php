<?php
//conecta ao banco de dado
include('conexao.php');

$usuario =  $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];



//cadastra no banco
$sql = "UPDATE usuario SET  email = '$email', senha = '$senha' 
WHERE nome ='$usuario'";

if (mysqli_query($conexao, $sql)){
  echo "Arquivo enviado com sucesso!";
  header ('Location: index.php ');
}else{
  echo "Falha ao enviar arquivo.";

}


?>