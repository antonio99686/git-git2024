<?php

//conecta ao banco de dado
include('conexao.php');


//dados do formulario
$usuario =  $_POST['usuario'];
$senha = $_POST['senha'];



//cadastramento no banco
$sql = "INSERT INTO usuario(
  
     email,
     senha)
 VALUES 
 ('$usuario','$senha')";

// Executar o comando SQL
if (mysqli_query($conexao, $sql)){
        echo "pessoa cadastrada com sucesso!";
        header('Location: index.php');
}else{
        echo "Falha ao cadastrar pessoa.";
}



 ?>
