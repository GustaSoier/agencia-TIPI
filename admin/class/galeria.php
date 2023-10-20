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

 

class GaleriaClass
{
    // ATRIBUTOS
    public $idGaleria;
    public $tituloGaleria;
    public $imgGaleria;
    public $linkGaleria;
    public $statusGaleria;


    // MÉTODOS
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this -> idGaleria = $id;
            $this -> Carregar();
        }
    }


    public function listar(){
        $query = "SELECT * FROM tblgaleria ORDER BY idGaleria ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblgaleria (tituloGaleria,
                                           imgGaleria,
                                           linkGaleria,
                                           statusGaleria)
                    VALUES
                    ('".$this -> tituloGaleria."',
                     '".$this -> imgGaleria."',
                      '".$this -> linkGaleria."',
                        '".$this -> statusGaleria."');";


        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=galeria'</script>";
    }

    public function Carregar(){
        $query = "SELECT * FROM tblgaleria WHERE idGaleria = " . $this -> idGaleria;

        $conn = Conexao::LigarConexao();
        $resultado = $conn -> query($query);
        $lista = $resultado -> fetchAll();

        foreach($lista as $linha){
            
            $this -> tituloGaleria = $linha['tituloGaleria'];
            $this -> imgGaleria = $linha['imgGaleria'];
            $this -> linkGaleria = $linha['linkGaleria'];
            $this -> statusGaleria = $linha['statusGaleria'];
        }

    }

public function Atualizar(){
    $query = "UPDATE tblgaleria SET
                tituloGaleria  = '".$this -> tituloGaleria."',
                imgGaleria     = '".$this -> imgGaleria."',
                linkGaleria    = '".$this -> linkGaleria."',
                statusGaleria    = '".$this -> statusGaleria."',
            WHERE tblgaleria.idGaleria = " . $this -> idGaleria;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=galeria'</script>";
}
    
public function Desativar(){
    $query = "UPDATE tblgaleria SET
                statusGaleria    = '0',
            WHERE tblservico.idServico = " . $this -> idGaleria;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=galeria'</script>";
}

}


