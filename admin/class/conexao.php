<?php

class Conexao{
    public static function LigarConexao(){
        //PDO serve para fazer conexão com o banco de dados
        $conn = new PDO('mysql:dbname=dbagenciatipi;host=localhost', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}