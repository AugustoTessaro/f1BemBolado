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

        

    echo $_SESSION['nome'];
    echo $_SESSION['email'];
    echo $_SESSION['senha'];
    echo $_SESSION['idade'];
    echo $_SESSION['CPF'];

    
?>
                