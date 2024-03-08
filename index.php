<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login_index.css">
    <link rel="shortcut icon" href="img/fechadura.png">
    <title>sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h3>Acesso Restrito</h3>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                        <div>
                        <div class="mb-3">
                            <label>Usuário</label>
                            <input type="text" name="email"
                             class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <label>Senha</label>
                            <input type="password" name="senha" 
                            class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="btn 
       btn-primary"> Enviar </button>
<br>
       <a href="formedit.php"> Esqueceu a Senha? </a>
<br>
       <a href="formcad.php"> Cadastre-se </a>

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>