<header class="site topo" id="topoFixo">
<h1>Agência TIPI</h1>
<div>
    <!-- esses botões são para o menu hamurguer do mobile -->
<button class="abrir-menu"></button>
    <nav class="menu">
<button class="fechar-menu"></button>

<?php
    $url = $_SERVER['REQUEST_URI'];
    $urlBase = basename($url)
    // echo $urlBase;
?>

        <div>
        <ul>
            <li><a href="index.php" <?php if($urlBase == 'index.php') echo 'class="ativo"'; ?>>Home</a></li>
            <li><a href="sobre.php" <?php if($urlBase == 'sobre.php') echo 'class="ativo"'; ?>>Sobre</a></li>
            <li><a href="servico.php" <?php if($urlBase == 'servico.php') echo 'class="ativo"'; ?>>Serviços</a></li>
            <li><a href="contato.php" <?php if($urlBase == 'contato.php') echo 'class="ativo"'; ?>>Contato</a></li>
        </ul>
    </div>

    <!-- esses são os links das redes sociais da nav -->
    <div class="redeSocialTopo">
        <button>Login</button>
    <ul>
        <li><a href="#">Facebook</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">WhatsApp</a></li>
    </ul>
    </div>
    </nav>
</div>
</header>