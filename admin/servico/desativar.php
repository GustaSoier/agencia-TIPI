<?php

$id = $_GET['id'];
    require_once('class/servico.php');

    $servico = new ServicoClass($id);


    if(isset($_POST['tituloServico'])){

        require_once('class/servico.php');

        $tituloServico = $_POST['tituloServico'];
        $textoServico = $_POST['textoServico'];
        $linkServico = $_POST['linkServico'];
        $statusServico = $_POST['statusServico'];

        if(!empty($_FILES['imgservico']['name'])){

            $arquivo = $_FILES['imgServico'];

            if($arquivo['error']){
                throw new Exception('Error' . $arquivo['error']);
            }
    
            if(move_uploaded_file($arquivo['tmp_name'], '../img/' . $arquivo['name'])){
                $imgServico = 'servico/' . $arquivo['name'];
            }
            else{
                throw new Exception('Error: Não foi possível realizar o Upload da imagem.');
            }
        }

        else{
            $imgServico = $servico -> imgServico;
        }

        $servico -> tituloServico = $tituloServico;
        $servico -> imgServico = $imgServico;
        $servico -> textoServico = $textoServico;
        $servico -> linkServico = $linkServico;
        $servico -> statusServico = $statusServico;

        $servico -> Desativar();
    }

?>


