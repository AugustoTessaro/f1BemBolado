<?php
    include('connection.php');


    session_start();

    
            $email = $_POST['email'];
            $password = $_POST['senha'];

            $query = "SELECT email, senha FROM usuario WHERE email = '{$email}' AND senha = '{$password}'";
            
            $result = mysqli_query($connection, $query);
            
            $row = mysqli_num_rows($result);
            
            if($row == 1) {
        
                echo "entrou";
                $result = mysqli_query($connection, 'SELECT * FROM usuario');
            $qtd = mysqli_num_rows($result);

            if($qtd > 0) {
                for($i = 0; $i < $qtd; $i++) {
                   $dados = mysqli_fetch_array($result);

                  header("location: sucess.php");
                }
            }
                
            } else {
               
            
                header("Location: cadastrar.php");
                
            }
        ?>