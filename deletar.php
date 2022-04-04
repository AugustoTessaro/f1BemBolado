<?php
    include_once("connection.php");
    require_once("validarLogin.php");

    $id = $_SESSION['id'];

        $result_usuario = "DELETE FROM usuario WHERE id ='$id'";
        $result_usuario = mysqli_query($connection, $result_usuario);
        header("Location: index.php")
?>