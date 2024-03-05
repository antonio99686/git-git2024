<?php

//conecta ao banco de dado
include('conexao.php');


//dados do formulario
$usuario =  $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];



//cadastramento no banco
$sql = "INSERT INTO usuario(
  nome,
     email,
     senha)
 VALUES 
 ('$usuario','$email','$senha')";

// Executar o comando SQL
if (mysqli_query($conexao, $sql)){
        echo "pessoa cadastrada com sucesso!";
        header('Location: index.php');
}else{
        echo "Falha ao cadastrar pessoa.";
}



 ?>
