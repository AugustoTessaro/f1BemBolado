<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-danger" href="index.php">F1 Bem Bolado</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link" href="login.php">Login</a>
            <a class="nav-item nav-link" href="#">Corridas</a>
            <a class="nav-item nav-link" href="perfil.php">Perfil</a>
            <a class="nav-item nav-link" href="deletar.php">Excluir</a>
            <a class="nav-item nav-link" href="editar.php">Editar</a>
            <a class="nav-item nav-link navbar-brand text-danger" href="sair.php">Sair</a>
            </div>
        </div>
        </nav>


            <?php

                
                session_start();
                if(isset($_SESSION['nome'])){
                    $tb = '<table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">'.$_SESSION['nome'].'</th>
                        <td>'.$_SESSION['idade'].'</td>
                        <td>'.$_SESSION['CPF'].'</td>
                        <td>'.$_SESSION['email'].'</td>
                      </tr>
                    </tbody>
                  </table>';
                    echo $tb;
                }
                
                
            ?>
                            



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>

            
