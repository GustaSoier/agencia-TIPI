<?php

    class Conexao{
      public static function LigarConexao(){
            $conn = new PDO('mysql:dbname=dbagenciatipi;host=localhost', 'root', '');
            // dbname= Nome da tabela; host= onde se localiza o banco; root= usuario; ''= senha
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

 

        }

 

    }