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

<section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900745!2d-46.434437023706685!3d-23.495592259181176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1sen!2sbr!4v1687884230706!5m2!1sen!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<section class="form">
    <div class="site">
        <h2>Formulário de contato</h2>
        <div>
            <form action="#" method="post">
            <div>
                <input type="text" id="nome" name="nome" placeholder="Informe seu nome:">
                <input type="email" id="email" name="email" required placeholder="Informe seu email:">
                <input type="tel" id="tel" name="tel" placeholder="Informe seu telefone:">
                <h3>Mensagem enviada com sucesso!!!</h3>
            </div>

            <div>
                <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Informe sua mensagem:"></textarea>
                <div>
                <input type="submit" value="Enviar via e-mail">
                <button onclick="formWhats()">Enviar via WhatsApp</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</section>

    <?php require_once('conteudo/sobre-conteudo.php'); ?>
    <?php require_once('conteudo/depoimento.php'); ?>
    <?php require_once('conteudo/blog.php'); ?>

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