<?php
session_start();
if(empty($_POST) or (empty($_POST['usuario']) or (empty($_POST['senha'])))) {
   echo"<script>location.href='index.php';</script>";
}
include('conexao.php');

$usuario =  $_POST['usuario'];
$senha = $_POST['senha'];
$sql = "SELECT * FROM  usuario WHERE usuario = '{$usuario}' AND  senha = '{$senha}'";
$resultado = mysqli_query($conexao,$sql);
$dados = mysqli_fetch_assoc($resultado);

$res = $conexao->query($sql) or die($conexao->error);
$row = $res->fetch_object();
$qtd = $res->num_rows;

if($qtd > 0 ){
    $_SESSION['usuario'] = $usuario;
    $_SESSION['nome'] = $row->nome;
    $_SESSION['id'] = $dados['id'];
    header ('Location: dashbord.php ');
 }else{
    header ('Location: protect.php');
 }

 ?>