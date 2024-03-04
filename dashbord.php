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
    <link rel="shortcut icon" href="img/logo.png">
    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
<a class="navbar-brand"> Sentinela da Fronteira</a>
<?php
include("conexao.php");
$sql = "SELECT * FROM usuario WHERE id_usuario =" . $_SESSION['id'];
$resultado = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($resultado);
echo "Olá, ". $_SESSION["nome"];
echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
?>
    </div>

</nav>
<div class="perfil">
  
  <h3> Dados do Integrante</h3>
<div class="imagen">
 <img src="img/<?php echo $dados['imagem'] ?>" width="100px" height="125px">
</div>
<div class="posisao">
<?php
 
echo"Nome:";
echo $_SESSION["nome"];
echo"<br>";




?>
</div>
</div>

<div class="barra">
<td>
<h2>Atualizações</h2> 
</td>



</div>

<main>
        <div class="titulo">Gerenciamento </div>
        <hr>
<div class="corpo">        

         <div class="card verde">
          <h2><a href="home/home.php">Pagamentos</a></h2>
          <p>Visualize os pagamentos a serem realizados </p>
        </div>  


        <div class="azul card">
        <h2><a href="home/home.php">Reuniões</a></h2>
          <p>Visualizar as reuniões marcadas</p>
        </div>
        
        <div class="card vermelho">
        <h2><a href="acessorios/index.php ">Vestimentas</a></h2>
          <p>Visualize as vestimentas  </p>
        </div>

        <div class="card roxo">
        <h2><a href="home/home.php">Participantes</a></h2>
            <p>Visualize os participantes  </p>
          </div>
    </div>
</main>
</body>
</html>

