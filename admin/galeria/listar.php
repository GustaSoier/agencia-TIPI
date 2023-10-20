<link rel="stylesheet" href="css/listar.css">

<?php
    require_once('class/galeria.php');
    $listaGaleria = new GaleriaClass();
    $listar = $listaGaleria->listar();
    // var_dump($listar);
?>

<div>
    <!-- criar tabela -->
    <table>
        
        <!-- titulo da tabela -->
        <caption>Listar Galeria</caption>
        <!-- criar cabeçario -->

        <thead>
            <!-- linha da tabela -->
            <tr>
                <!-- celula da tabela -->
                <th>ID</th>
                <th>TITULO</th>
                <th>IMG</th>
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
                <td><?php echo $linha['idGaleria']?></td>
                <td><?php echo $linha['tituloGaleria']?></td>
                <td><?php echo '<img src="./img/' . $linha['imgGaleria'] .'">' ?></td>      
                <td><?php echo $linha['linkGaleria']?></td>
                <td><?php echo $linha['statusGaleria']?></td>
                <td class="btn-inserir"><a href="index.php?p=galeria&g=inserir">INSERIR</a></td>
                <td class="btn-atualizar"><a href="index.php?p=galeria&g=atualizar&id=<?php echo $linha['idGaleria']?>">ATUALIZAR</a></td>
                <td class="btn-desativar"><a href="index.php?p=galeria&g=desativar&id=<?php echo $linha['idGaleria']?>">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>