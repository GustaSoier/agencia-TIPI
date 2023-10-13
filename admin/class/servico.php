 <!-- 

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
// }-->

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
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this -> idServico = $id;
            $this -> Carregar();
        }
    }


    public function listar(){
        $query = "SELECT * FROM tblservico ORDER BY idServico ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblservico (tituloServico,
                                           imgServico,
                                           textoServico,
                                           linkServico,
                                           statusServico)
                    VALUES
                    ('".$this -> tituloServico."',
                     '".$this -> imgServico."',
                       '".$this -> textoServico."',
                        '".$this -> linkServico."',
                        '".$this -> statusServico."');";


        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=servico'</script>";
    }

    public function Carregar(){
        $query = "SELECT * FROM tblservico WHERE idServico = " . $this -> idServico;

        $conn = Conexao::LigarConexao();
        $resultado = $conn -> query($query);
        $lista = $resultado -> fetchAll();

        foreach($lista as $linha){
            
            $this -> tituloServico = $linha['tituloServico'];
            $this -> imgServico = $linha['imgServico'];
            $this -> textoServico = $linha['textoServico'];
            $this -> linkServico = $linha['linkServico'];
            $this -> statusServico = $linha['statusServico'];
        }

    }

public function Atualizar(){
    $query = "UPDATE tblservico SET
                tituloServico  = '".$this -> tituloServico."',
                imgServico     = '".$this -> imgServico."',
                textoServico   = '".$this -> textoServico."',
                linkServico    = '".$this -> linkServico."',
                statusServico    = '".$this -> statusServico."',
            WHERE tblservico.idServico = " . $this -> idServico;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
}
    
public function Desativar(){
    $query = "UPDATE tblservico SET
                statusServico    = '0',
            WHERE tblservico.idServico = " . $this -> idServico;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=servico'</script>";
}

}


