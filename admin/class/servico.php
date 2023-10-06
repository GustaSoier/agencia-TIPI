 <!-- <?php

// require_once('conexao.php');

// class ServicoClass{
//     // ATRIBUTOS
//     public $idServico;
//     public $tituloServico;
//     public $imgServico;
//     public $altServico;
//     public $textoServico;
//     public $linkServico;
//     public $statusServico;

//     // MÉTODOS 
//     public function listar(){
//         $query = "SELECT * FROM tblservico WHERE statusServico = 1 ORDER BY tituloServico ASC";
//         $conn = Conexao::LigarConexao();
//         $resultado = $conn->query($query);
//         $lista = $resultado -> fetchAll();
//         return $lista;
//     }
// }
?> -->

<?php

 

require_once('conexao.php');

 

class ServicoClass
{
    // ATRIBUTOS
    public $idServico;
    public $tituloServico;
    public $imgServico;
    public $altServico;
    public $textoServico;
    public $linkServico;
    public $statusServico;

    // MÉTODOS
    public function listar(){
        $query = "SELECT * FROM tblservico WHERE statusServico = 1 ORDER BY tituloServico ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblservico ( tituloServico,
                                           imgServico,
                                           altServico,
                                           textoServico,
                                           linkServico,
                                           statusServico)
                    VALUES
                    ('".$this -> tituloServico."',
                     '".$this -> imgServico."',
                      '".$this -> altServico."',
                       '".$this -> textoServico."',
                        '".$this -> linkServico."'
                        '".$this -> statusServico."');";


        $conn = Conexao::LigarConexao();
        echo "<script>document.location='index.php?p=servico'</script>";
    }
    
}


