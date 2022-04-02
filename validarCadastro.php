<?php
session_start();
include('connection.php');




$nome = mysqli_real_escape_string($connection, trim($_POST['nome']));
$email = mysqli_real_escape_string($connection, trim($_POST['email']));
$idade = mysqli_real_escape_string($connection, trim($_POST['idade']));
$CPF = mysqli_real_escape_string($connection, trim($_POST['CPF']));
$senha = mysqli_real_escape_string($connection, trim($_POST['senha']));


$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);


if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    $_SESSION['status_cadastro'] = false;
    header('Location: login.php');
    exit;
}else
{
    unset($_SESSION['usuario_existe']);
}

$sql= "INSERT INTO usuario (nome,email,idade,CPF,senha) VALUES ('$nome','$email', '$idade', '$CPF', '$senha')";

if($connection->query($sql) === TRUE){
    $_SESSION['status_cadastro'] = true;
    $_SESSION['usuario_existe'] = false;
    header("Location: login.php");
}else
{
    unset($_SESSION['status_cadastro']);
}

?>