<link rel="stylesheet" href="css/listar.css">

<?php
    require_once('class/servico.php');
    $listaServico = new ServicoClass();
    $listar = $listaServico->listar();
    // var_dump($listar);
?>

<div>
    <!-- criar tabela -->
    <table>
        
        <!-- titulo da tabela -->
        <caption>Listar Serviços</caption>
        <!-- criar cabeçario -->

        <thead>
            <!-- linha da tabela -->
            <tr>
                <!-- celula da tabela -->
                <th>ID</th>
                <th>TITULO</th>
                <th>IMG</th>
                <th>TEXTO</th>
                <th>LINK</th>
                <th>STATUS</th>
                <th>INSERIR</th>
                <th>ATUALIZAR</th>
                <th>DESATIVAR</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listar as $linha): ?>
            <tr>
                <td><?php echo $linha['idServico']?></td>
                <td><?php echo $linha['tituloServico']?></td>
                <td><?php echo '<img src="../img/' . $linha['imgServico'] .'">' ?></td>      
                <td><?php echo $linha['textoServico']?></td>
                <td><?php echo $linha['linkServico']?></td>
                <td><?php echo $linha['statusServico']?></td>
                <td class="btn-inserir"><a href="index.php?p=servico&s=inserir">INSERIR</a></td>
                <td class="btn-atualizar"><a href="index.php?p=servico&s=atualizar">ATUALIZAR</a></td>
                <td class="btn-desativar"><a href="index.php?p=servico&s=desativar">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- <ul>
    <li>
        <a href="index.php?p=servico&s=inserir">Inserir</a>
    </li>

    <li>
        <a href="index.php?p=servico&s=atualizar">Atualizar</a>
    </li>

    <li>
        <a href="index.php?p=servico=desativar">Desativar</a>
    </li>

</ul> -->