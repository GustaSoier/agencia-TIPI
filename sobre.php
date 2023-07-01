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
    <?php require_once('conteudo/banner.php'); ?>

    <main>
        <section class="sobre1">
            <div class="site">
                <div id="contsobre1">
                    <h2>Sobre Agencia</h2>
                    <p>A Agência TIPI é uma empresa de desenvolvimento web que atua no mercado oferecendo soluções
                        personalizadas e inovadoras para seus clientes. Com um time de profissionais altamente
                        qualificados e experientes, a Agência TIPI se destaca pela sua capacidade de entender as
                        necessidades de seus clientes e entregar projetos de alta qualidade, com prazos e custos
                        competitivos.</p>
                    <button>Saiba mais</button>
                </div>

                <div class="sobre-img1">
                    <img src="img/sobre.png">
                </div>
            </div>
        </section>

        <!-- sobre2 -->

        <section data-aos="fade-up" class="sobre2">
            <div class="site">
                <div class="sobre-img2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="img/missao-tipi.png">
                </div>

                <div id="contsobre2">
                    <h2>Sobre Agencia</h2>
                    <p>A Agência TIPI é uma empresa de desenvolvimento web que atua no mercado oferecendo soluções
                        personalizadas e inovadoras para seus clientes. Com um time de profissionais altamente
                        qualificados e experientes, a Agência TIPI se destaca pela sua capacidade de entender as
                        necessidades de seus clientes e entregar projetos de alta qualidade, com prazos e custos
                        competitivos.</p>
                    <button>Saiba mais</button>
                </div>
            </div>
        </section>

        <section data-aos="fade-up" class="sobre1">
            <div class="site">
                <div id="contsobre1">
                    <h2>Sobre Agencia</h2>
                    <p>A Agência TIPI é uma empresa de desenvolvimento web que atua no mercado oferecendo soluções
                        personalizadas e inovadoras para seus clientes. Com um time de profissionais altamente
                        qualificados e experientes, a Agência TIPI se destaca pela sua capacidade de entender as
                        necessidades de seus clientes e entregar projetos de alta qualidade, com prazos e custos
                        competitivos.</p>
                    <button>Saiba mais</button>

                </div>

                <div class="sobre-img1" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="img/visao-tipi.png">
                </div>
            </div>
        </section>

        <section data-aos="fade-up" class="sobre4">
            <div class="site">
                <div class="sobre-img2" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                    <img src="img/valores-tipi.png">
                </div>

                <div id="contsobre4">
                    <h2>Sobre Agencia</h2>
                    <p>A Agência TIPI é uma empresa de desenvolvimento web que atua no mercado oferecendo soluções
                        personalizadas e inovadoras para seus clientes. Com um time de profissionais altamente
                        qualificados e experientes, a Agência TIPI se destaca pela sua capacidade de entender as
                        necessidades de seus clientes e entregar projetos de alta qualidade, com prazos e custos
                        competitivos.</p>
                    <button>Saiba mais</button>
                </div>
            </div>
        </section>

        <?php require_once('conteudo/servico-conteudo.php'); ?>
        <?php require_once('conteudo/galeria.php'); ?>

<footer class="rodape">
     <?php require_once('conteudo/rodape.php'); ?>
</footer>

    </main>
    

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