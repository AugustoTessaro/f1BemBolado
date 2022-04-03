<?php
    include('connection.php');
    session_start();


            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $query = "SELECT email FROM usuario WHERE email = '{$email}'";
            $result = mysqli_query($connection, $query);
            $rows = mysqli_num_rows($result);

        
            if($rows > 0){
                $_SESSION['senha_incorreta'] = true;
                header("location: login.php");
            }else{
            
                $_SESSION['usuario_nao_cadastrado'] = true;
                header("location: cadastrar.php");
            }


        $query = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";

        $result = mysqli_query($connection, $query);
        $rows = mysqli_num_rows($result);

        if($rows > 0){
            $dados = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $_SESSION['id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            $_SESSION['idade'] = $dados['idade'];
            $_SESSION['email'] = $dados['email'];
            $_SESSION['senha'] = $dados['senha'];
            $_SESSION['CPF'] = $dados['CPF'];
            header('location: sucess.php');
        }
            
            /*if($row == 1) {
        
                echo "entrou";
                $result = mysqli_query($connection, 'SELECT * FROM usuario');
            $qtd = mysqli_num_rows($result);

            if($qtd > 0) {
                for($i = 0; $i < $qtd; $i++) {
                    $dados = mysqli_fetch_array($result);
                    $_SESSION['dados'] = $dados;
                }
                echo $dados;
            }
                
            } else {
                $_SESSION['usuario_nao_cadastrado'] = true;
                echo $row;
                
            }*/
        ?>