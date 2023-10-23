<?php

    require_once('class/servico.php');

        $id = $_GET['id'];
    $servico = new ServicoClass($id);
    $servico -> idServico = $id;
    $servico -> Desativar() ?>





