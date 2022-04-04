<?php 
    include_once("connection.php");
    require_once("validarLogin.php");

$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$email = mysqli_real_escape_string($connection, trim($_POST['email']));
$idade = mysqli_real_escape_string($connection, trim($_POST['idade']));
$CPF = mysqli_real_escape_string($connection, trim($_POST['CPF']));
$senha = mysqli_real_escape_string($connection, trim($_POST['senha']));


    $id = $_SESSION['id'];

        $result_usuario = "UPDATE usuario SET nome = '$nome', idade = '$idade', email = '$email', senha = '$senha', CPF = '$CPF'  WHERE id ='$id'";
        $result_usuario = mysqli_query($connection, $result_usuario);
        header("Location: login.php")

        
    ?>