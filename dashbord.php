<?php
session_start();
if(empty($_SESSION)){
echo"<script>location.hrfe='index.php';</script>";

} 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashbord.css">
    <link rel="shortcut icon" href="sql/icon.png">
    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
<a class="navbar-brand"> Sistema</a>
<?php
include("conexao.php");
$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
echo "Olá, ". $dados["nome"];
echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
?>
    </div>

</nav>
<div class="perfil">
  
<h3>Dados</h3>

<div class="posisao">
  <?php
 
 echo"Nome: ";
 echo $dados["nome"];
 echo"<br>";
 
 
 
 
 ?>
 </div>
</div>


<div class="barra">




</div>


</main>
</body>
</html>

