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

    <title>Cadastro</title>
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



    <div class="col-2 m-auto justify-content-center">
        <form method="POST" action="validarCadastro.php">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="nome" name="nome" class="form-control" id="nome" aria-describedby="nomeHelp"
                    placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Endereço de email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp"
                    placeholder="Seu email" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade</label>
                <input type="number" name="idade" class="form-control" id="idade" aria-describedby="idadeHelp"
                    placeholder="Sua idade" required>
            </div>
            <div class="form-group">
                <label for="CPF">CPF</label>
                <input type="number" name="CPF" class="form-control" id="CPF" aria-describedby="CPFHelp"
                    placeholder="Seu CPF" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha" required>
            </div>
            <div class="text-center">
                <button type="submit" name="enviar" class="btn btn-dark">Cadastrar</button>
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