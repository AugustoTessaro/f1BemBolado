<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    deu bom
</body>
</html>

            
<?php
session_start();
include('connection.php');
$email = $_POST['email'];
$password = $_POST['senha'];

$query = "SELECT email, senha FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
         echo '
         <div class="dados" id="' . $dados['id'] . '">
             <h1>' . $dados['nome'] . '</h1>
             <p><strong>Email:</strong>' . $dados['email'] . '</p>
             <p><strong>Idade:</strong> ' . $dados['idade'] . '</p>
             <p><strong>CPF:</strong> ' . $dados['CPF'] . '</p>
             <p><strong>ID Usuario:</strong> ' . $dados['id'] . '</p>
             <div class="buttons">
                 <a class="delete" href="delete.php?id=' . $dados['id'] . '">apagar</a>
                 <a class="edit" href="edit.php?id=' . $dados['id'] . '">editar</a>
             </div>
         </div>
    '
             

?>
                
           