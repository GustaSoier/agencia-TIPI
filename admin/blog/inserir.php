<?php

    if(isset($_POST['tituloBlog'])){

        require_once('class/blog.php');

        $tituloBlog = $_POST['tituloBlog'];
        $textoBlog = $_POST['textoBlog'];
        $linkBlog = $_POST['linkBlog'];
        $statusBlog = $_POST['statusBlog'];

        $arquivo = $_FILES['imgBlog'];
        
        if($arquivo['error']){
            throw new Exception('Error' . $arquivo['error']);
        }
 
        if(move_uploaded_file($arquivo['tmp_name'], '../img/' . $arquivo['name'])){
            $imgServico = 'blog/' . $arquivo['name'];
        }
        else{
            throw new Exception('Error: Não foi possível realizar o Upload da imagem.');
        }

        $blog = new BlogClass();

        $blog -> tituloBlog = $tituloBlog;
        $blog -> imgBlog = $imgBlog;
        $blog -> textoBlog = $textoBlog;
        $blog -> linkBlog = $linkBlog;
        $blog -> statusBlog = $statusBlog;

        $blog -> Inserir();

    }

?>


<style>

    main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .titulo-inserir {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #007BFF;
        border-radius: 5px;
        margin-bottom: 20px;
        margin-top: 20px;
        width: 100%;
    }

    .titulo-inserir h2 {
        text-align: center;
        text-transform: uppercase;
    }

    .container-inserir {
        display: flex;
        text-align: center;
        justify-content: center;
        height: 75vh;
        width: 70%;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form{
        width: 100%;
        padding-right: 20px;
    }

     label {
        display: block;
        font-weight: bold;
    }

     input,
     textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #texto{
        resize: none;
        height: 120px;
    }

    input[type=checkbox] {
        display: none;
    }

    input[type=checkbox]+label::before {
        content: "Inativo";
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: red;
        height: 60px;
        width: 110px;
        border-radius: 10px;
        border: none;
        cursor: pointer;
        transition: all 0.4s ease-in-out;
        align-self: center;
        opacity: 0.9;
        font-size: 1rem;
        cursor: pointer;
        box-shadow: rgba(10px, 15px, 15px, 0.5);
    }

    input[type=checkbox]:checked+label::before {
        content: "Ativo";
        background-color: #2bee11;
        color: white;
        cursor: pointer;
    }

    .div-statusInserir{
        align-self: center;
        width: 100px;
        height: 200px;
        background-color: red;
    }

    .foto-preview{
        text-align: center;
        align-self: center;
    }

    input[type=file]{
        display: none;
    }

    .btn-foto{
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
    }

    button {
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
        margin-top: 30px;
    }

    button:hover {
        background-color: #0056b3;
    }

    .btn-inserir{
        display: flex;

    }

    .btn-inserir a{
        align-self: flex-end;
    }

</style>


<link rel="stylesheet" href="./css/dashboard.css">

<div class="titulo-inserir">
    <h2>inserir dados</h2>
</div>

<div class="container-inserir">
    <form action="index.php?p=blog&b=inserir" method="POST" enctype="multipart/form-data">


            <label for="foto">Escolher Foto:</label>
            <div class="foto-preview">
                <img src="img/sem-foto.svg" alt="" id="imagemExibida">
            </div>

            <!-- <div class="foto-preview" id="foto-preview"></div> -->
            <input type="file" id="inputImagem" name="imgServico" required>
            <label for="foto" class="btn-foto">Selecione uma imagem:</label>
        
            <label for="titulo">Título do Serviço:</label>
            <input type="text" id="tituloServico" name="tituloServico" required>
        
            <h3>Status Serviço:</h3>
            <input type="checkbox" id="status" name="statusServico" value="1" required>
             <label for="status"></label>

            <label for="texto">Texto do Serviço:</label>
            <textarea id="texto" name="textoServico" required></textarea>
        

            <label for="link">Link do Serviço:</label>
            <input type="text" id="link" name="linkServico" required>
        
        <button type="submit">Inserir</button>
    </form>
</div>

<script>

    document.getElementById('imagemExibida').addEventListener('click', function(){
        document.getElementById('inputImagem').click();
});

    document.getElementById('inputImagem').addEventListener('change', function(event){

        let imagemExibida = document.getElementById('imagemExibida');
        
        let arquivo = event.target.files[0];

        if(arquivo){
            let carregar = new FileReader();

            carregar.onload = function(e){
                imagemExibida.src = e.target.result;
            };

            carregar.readAsDataURL(arquivo);
        }

    });
</script>
