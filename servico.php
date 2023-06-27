<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência TIPI</title>

    <!-- esses links são para chamar pastaas de estilização para o site -->
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    
     <?php require_once('conteudo/topo.php'); ?>

<main>

<?php require_once('conteudo/servico-conteudo.php'); ?>
<?php require_once('conteudo/galeria.php'); ?>


</main>

<footer>
    <?php require_once('conteudo/rodape.php'); ?>
     <?php require_once('conteudo/direitos.php'); ?>
</footer>
    

    <!-- aqui é pra chamar o aquivo js da biblioteca -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- aqui é pra chamar o arquivo js de animaçoes e precisa ser puxar da biblioteca para acha-lo -->
    <script src="js/slick.js"></script>

        <!-- animações AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- eu abri a pasta de animações de js -->
    <script src="js/script.js"></script>

    
</body>
</html>