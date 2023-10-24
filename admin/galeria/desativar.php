<?php

$id = $_GET['id'];
    require_once('class/galeria.php');

    $galeria = new GaleriaClass($id);


    if(isset($_POST['tituloGaleria'])){

        require_once('class/galeria.php');

        $tituloGaleria = $_POST['tituloGaleria'];
        $linkGaleria = $_POST['linkGaleria'];
        $statusGaleria = $_POST['statusGaleria'];

        if(!empty($_FILES['imgGaleria']['name'])){

            $arquivo = $_FILES['imgGaleria'];

            if($arquivo['error']){
                throw new Exception('Error' . $arquivo['error']);
            }
    
            if(move_uploaded_file($arquivo['tmp_name'], './img/' . $arquivo['name'])){
                $imgGaleria = 'galeria/' . $arquivo['name'];
            }
            else{
                throw new Exception('Error: Não foi possível realizar o Upload da imagem.');
            }
        }

        else{
            $imgGaleria = $galeria -> imgGaleria;
        }

        $galeria -> tituloGaleria = $tituloGaleria;
        $galeria -> imgGaleria = $imgGaleria;
        $galeria -> linkGaleria = $linkGaleria;
        $galeria -> statusGaleria = $statusGaleria;

        $galeria -> Desativar();
    }
