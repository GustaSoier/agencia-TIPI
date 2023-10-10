<section data-aos="fade-up" class="siteserv">
<h2>Serviços</h2>

<div class="servico site">
    
<?php foreach ($listar as $linha): ?>

    <div>
        <h2><?php echo $linha['tituloServico'] ?></h2>
        <img src="img/<?php echo $linha['imgServico'] ?>" alt="Serviço Agência TIPI">
        <p><?php echo $linha ['textoServico'] ?></p>
        <button href="<?php echo $linha['linkServico']
        ?>"> Saiba mais</button>
    </div>
    <?php endforeach; ?>
</div>
</section>
