<link rel="stylesheet" href="css/listar.css">

<?php
    require_once('class/blog.php');
    $listaBlog = new BlogClass();
    $listar = $listaBlog -> listar();
?>


<div>

    <table>
        <caption>Listar Blog</caption>
        <thead>
            <tr>
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
                <td><?php echo $linha['idBlog']?></td>
                <td><?php echo $linha['tituloBlog']?></td>
                <td><?php echo '<img src="./img/' . $linha['imgBlog'] .'">' ?></td>      
                <td><?php echo $linha['textoBlog']?></td>
                <td><?php echo $linha['linkBlog']?></td>
                <td><?php echo $linha['statusBlog']?></td>
                <td class="btn-inserir"><a href="index.php?p=blog&b=inserir">INSERIR</a></td>
                <td class="btn-atualizar"><a href="index.php?p=blog&b=atualizar&id=<?php echo $linha['idBlog']?>">ATUALIZAR</a></td>
                <td class="btn-desativar"><a href="index.php?p=blog&b=desativar&id=<?php echo $linha['idBlog']?>">DESATIVAR</a></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</div>
