<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PHP</title>
</head>

<body>

    <?php
    if (!isset($_SESSION['logado'])) {
        //print_r($_SESSION);
        //print_r($_POST);

        $usuario_bd = 'joao';
        $senha_bd = '123';

        if (isset($_POST['enviar'])) {

            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            if ($usuario == $usuario_bd && $senha == $senha_bd) {
                $_SESSION['logado'] = true;
                $_SESSION['usuario'] = $usuario;
                header('location: index.php');
            }else{
                echo "errrooou!";
            }
        }

        include('login.php');
    } else {
        //print_r($_SESSION);
        include('home.php');
        if(isset($_GET['logout'])){
            session_destroy();
            header('location: index.php');
        }
    }
    ?>
</body>

</html>