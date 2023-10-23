<?php

    require_once('class/login.php');

    session_start();
    $msgErro = '';
    
    if(isset($_POST['email'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // $senha = password_hash($senha, PASSWORD_DEFAULT); forma de crptografar senha no banco de dados
        // md5($senha)


    $login = new Login();

    $login -> emailUsuario = $email;
    $login -> senhaUsuario = $senha;
    $dadosLogin = $login ->VerificarLogin();

    // var_dump($dadosLogin);

    if($dadosLogin == NULL){
        $msgErro = 'Login falhou! Tente novamente.';
    }
    else{
        $_SESSION['login']  = $dadosLogin['emailUsuario'];
        $_SESSION['idUser'] = $dadosLogin['idUsuario'];

        header('Location:index.php');

        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<body>

    <div class="container-login">
        <img src="img/logo02.svg" alt="">
        <h1>POR FAVOR, INFORMAR OS DADOS DE ACESSO!</h1>

        <form action="#" method="POST">

        <div>
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required placeholder="Digite seu E-mail:">
        </div>

        <div>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required placeholder="Digite sua senha:">
        </div>

        <input type="submit" value="Entrar">

        </form>



    </div>
    
</body>
</html>