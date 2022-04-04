
<?php
session_start();


unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['idade']);
unset($_SESSION['CPF']);
unset($_SESSION['senha']);
unset($_SESSION['id']);

if($_SESSION['nome'] || $_SESSION['email']  || $_SESSION['idade'] || $_SESSION['CPF'] || $_SESSION['senha']  || $_SESSION['id'] == ""){
    $_SESSION['usuario_nao_logado'] = true;
    echo 'ai caralho';
}



session_destroy();



header("location: index.php");
exit();

?>

