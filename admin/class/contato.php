<?php
    require_once('conexao.php');

    class ContatoClass {
        // ATRIBUTOS
        public $idContato;
        public $nomeContato;
        public $emailContato;
        public $foneContato;
        public $mensContato;
        public $dataContato;
        public $horaContato;

        // MÉTODO
        public function InserirContato() {
            $sql = "INSERT INTO tblcontato (
                        nomeContato, emailContato, foneContato, mensContato, dataContato, horaContato
                    )
                    VALUES (
                        '".$this->nomeContato."',
                        '".$this->emailContato."',
                        '".$this->foneContato."',
                        '".$this->mensContato."',
                        '".$this->dataContato."',
                        '".$this->horaContato."'
                    )";

            $conn = Conexao::LigarConexao();
            $conn->exec($sql);
        }
    }
?>