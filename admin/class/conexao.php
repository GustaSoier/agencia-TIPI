<?php

class Conexao{

    public static function LigarConexao(){
        // qual o tipo de banco de dados, onde esta hospedado o projeto, root padrão e a senha
        $conn = new PDO('mysql:dbname=dbagenciatipi;host=localhost', 'root', '');
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
        return $conn;

        // PDO serve de conexão com o banco de dados
    }

}