<?php

 

require_once('conexao.php');

 

class BlogClass
{
    // ATRIBUTOS
    public $idBlog;
    public $tituloBlog;
    public $imgBlog;
    public $textoBlog;
    public $linkBlog;
    public $statusBlog;


    // MÉTODOS
    public function __construct($id = false) //verificar se o id foi passado
    {
        if($id){
            $this -> idBlog = $id;
            $this -> Carregar();
        }
    }


    public function listar(){
        $query = "SELECT * FROM tblblog ORDER BY idBlog ASC;";
        $conn = Conexao::LigarConexao();
        $resultado = $conn->query($query);
        $lista = $resultado->fetchAll();

        return $lista;
    }

    public function Inserir(){
        $query = "INSERT INTO tblblog (tituloBlog,
                                           imgBlog,
                                           textoBlog,
                                           linkBlog,
                                           statusBlog)
                    VALUES
                    ('".$this -> tituloBlog."',
                     '".$this -> imgBlog."',
                       '".$this -> textoBlog."',
                        '".$this -> linkBlog."',
                        '".$this -> statusBlog."');";


        $conn = Conexao::LigarConexao();
        $conn->exec($query);
        echo "<script>document.location='index.php?p=blog'</script>";
    }

    public function Carregar(){
        $query = "SELECT * FROM tblblog WHERE idBlog = " . $this -> idBlog;

        $conn = Conexao::LigarConexao();
        $resultado = $conn -> query($query);
        $lista = $resultado -> fetchAll();

        foreach($lista as $linha){
            
            $this -> tituloBlog = $linha['tituloBlog'];
            $this -> imgBlog = $linha['imgBlog'];
            $this -> textoBlog = $linha['textoBlog'];
            $this -> linkBlog = $linha['linkBlog'];
            $this -> statusBlog = $linha['statusBlog'];
        }

    }

public function Atualizar(){
    $query = "UPDATE tblblog SET
                tituloBlog  = '".$this -> tituloBlog."',
                imgBlog     = '".$this -> imgBlog."',
                textoBlog   = '".$this -> textoBlog."',
                linkBlog    = '".$this -> linkBlog."',
                statusBlog    = '".$this -> statusBlog."',
            WHERE tblblog.idBlog = " . $this -> idBlog;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=blog'</script>";
}
    
public function Desativar(){
    $query = "UPDATE tblblog SET
                statusBlog    = '0',
            WHERE tblblog.idBlog = " . $this -> idBlog;

            $conn = Conexao::LigarConexao();
            $conn->exec($query);
            echo "<script>document.location='index.php?p=blog</script>";
}

}


