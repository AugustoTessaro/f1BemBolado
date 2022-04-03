<?php
include('connection.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>

   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <a class="navbar-brand text-danger" href="index.php">F1 Bem Bolado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="login.php">Login</a>
                <a class="nav-item nav-link" href="#">Corridas</a>
                <a class="nav-item nav-link" href="sucess.php">Perfil</a>
                <a class="nav-item nav-link disabled" href="#">Apostar</a>
            </div>
        </div>
    </nav>

    

    <?php
                    if(isset($_SESSION['senha_incorreta'])):
                ?>
                        <div class=" container text-center">
                            <div class="alert alert-danger">
                                <p>senha incorreta!</p>
                            </div>  
                        </div>
                <?php
                endif;
                unset($_SESSION['senha_incorreta']);
                ?>
        <?php
                    if(isset($_SESSION['usuario_existe'])):
                ?>
                        <div class=" container text-center">
                            <div class="alert alert-danger">
                                <p>Esse email já está cadastrado! Efetue o login</p>
                            </div>  
                        </div>
                <?php
                endif;
                unset($_SESSION['usuario_existe']);
                ?>

                <?php
                        if(isset($_SESSION['status_cadastro'])):
                    ?>
                        <div class=" container text-center">
                            <div class="alert alert-danger">
                            <p>usuario cadastrado com sucesso faca o login</p>
                            </div>
                        </div>
                    <?php
                    endif;
                    unset($_SESSION['status_cadastro']);
                    ?>

   

    <div class="col-2 m-auto justify-content-center">
        <form method="POST" action="validarLogin.php">
            <div class="form-group">
                <label for="email">Endereço de email</label>
                <input type="email" name= "email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Seu email" required>
                <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu email, com
                    ninguém.</small>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name= "senha" class="form-control" id="senha" placeholder="Senha" required>
            </div>
            <div class="text-center" >
                <button type="submit" name= "enviar" class="btn btn-dark mb-3">Logar</button>
                <p>Não tem um cadastro? Faça o seu cadastro agora mesmo!</p>
                <a href="cadastrar.php"> Cadastrar </a>
            </div>
        </form>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>